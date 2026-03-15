<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WeddingOrganizerResource\Pages;
use App\Models\WeddingOrganizer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

/**
 * @mixin \Eloquent
 * @property-read \App\Models\WeddingOrganizer $record
 */
class WeddingOrganizerResource extends Resource
{
    protected static ?string $model = WeddingOrganizer::class;

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';

    protected static ?int $navigationSort = 1;

    protected static ?string $recordTitleAttribute = 'name';

    public static function getModelLabel(): string
    {
        return __('Profil Studio');
    }

    public static function getPluralModelLabel(): string
    {
        return __('Profil Studio');
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name'];
    }

    public static function getNavigationGroup(): ?string
    {
        return __('Studio');
    }

    public static function getNavigationLabel(): string
    {
        return __('Profil Studio');
    }

    public static function getNavigationBadge(): ?string
    {
        /** @var Builder $query */
        $query = static::$model::query();

        return (string) $query->count();
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'primary';
    }

    public static function getNavigationBadgeTooltip(): ?string
    {
        return __('Profil WO Aktif');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make(__('Informasi Studio'))
                    ->description(__('Detail studio rias pengantin dan merek.'))
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label(__('Nama Studio'))
                            ->required()
                            ->maxLength(255)
                            ->default('Devi Make Up & Wedding')
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (Forms\Set $set, ?string $state) => $set('slug', str($state)->slug())),
                        Forms\Components\TextInput::make('slug')
                            ->label(__('Slug'))
                            ->required()
                            ->unique(ignorable: fn (?WeddingOrganizer $record) => $record)
                            ->maxLength(255)
                            ->default('devi-makeup-wedding'),
                        Forms\Components\SpatieMediaLibraryFileUpload::make('gallery')
                            ->label(__('Galeri'))
                            ->collection('gallery')
                            ->multiple()
                            ->reorderable()
                            ->image()
                            ->columnSpanFull(),
                        Forms\Components\Textarea::make('description')
                            ->label(__('Deskripsi Studio'))
                            ->default('Artis rias pengantin profesional yang mengkhususkan diri dalam gaya pernikahan tradisional dan modern.')
                            ->columnSpanFull(),
                    ])->columns(['sm' => 2]),

                Forms\Components\Section::make(__('Kontak & Lokasi'))
                    ->description(__('Informasi kontak studio dan detail lokasi.'))
                    ->schema([
                        Forms\Components\TextInput::make('address')
                            ->label(__('Alamat Studio'))
                            ->maxLength(255)
                            ->default('Jakarta Selatan, DKI Jakarta'),
                        Forms\Components\Group::make([
                            Forms\Components\TextInput::make('latitude')
                                ->maxLength(255),
                            Forms\Components\TextInput::make('longitude')
                                ->maxLength(255),
                        ])->columns(['sm' => 2]),
                        Forms\Components\TextInput::make('rating')
                            ->label(__('Rating'))
                            ->required()
                            ->numeric()
                            ->default(0.00)
                            ->minValue(0)
                            ->maxValue(5),
                        Forms\Components\Toggle::make('is_verified')
                            ->label(__('Studio Terverifikasi'))
                            ->required()
                            ->default(true)
                            ->inline(false),
                    ])->columns(['sm' => 2]),

                Forms\Components\Section::make(__('Video Profil Studio'))
                    ->description(__('Upload video perkenalan studio untuk ditampilkan di halaman profil.'))
                    ->schema([
                        Forms\Components\SpatieMediaLibraryFileUpload::make('videos')
                            ->label(__('Video Profil Studio'))
                            ->collection('videos')
                            ->multiple()
                            ->acceptedFileTypes(['video/mp4', 'video/webm', 'video/ogg', 'video/quicktime'])
                            ->maxSize(102400000) // 100GB
                            ->maxFiles(3)
                            ->helperText(__('Upload video profil/showreel studio. Format: MP4, WebM, MOV. Maks 100GB per file.'))
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->mobileCards()
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label(__('Nama Studio'))
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('slug')
                    ->label(__('Slug'))
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('address')
                    ->label(__('Alamat'))
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('latitude')
                    ->label(__('Latitude'))
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('longitude')
                    ->label(__('Longitude'))
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('rating')
                    ->label(__('Rating'))
                    ->numeric()
                    ->sortable()
                    ->alignment('center'),
                Tables\Columns\IconColumn::make('is_verified')
                    ->label(__('Terverifikasi'))
                    ->boolean()
                    ->alignment('center'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label(__('Terdaftar Pada'))
                    ->dateTime()
                    ->sortable()
                    ->alignment('center')
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label(__('Diperbarui Pada'))
                    ->dateTime()
                    ->sortable()
                    ->alignment('center')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make()
                    ->button()
                    ->color('info')
                    ->size('lg'),
                Tables\Actions\EditAction::make()
                    ->button()
                    ->color('warning')
                    ->size('lg')
                    ->successNotification(
                        Notification::make()
                            ->success()
                            ->title(__('Studio Rias Pengantin diperbarui'))
                            ->body(__('Studio rias pengantin telah berhasil diperbarui.'))
                    ),
                Tables\Actions\DeleteAction::make()
                    ->button()
                    ->color('danger')
                    ->size('lg')
                    ->successNotification(
                        Notification::make()
                            ->success()
                            ->title(__('Studio Rias Pengantin dihapus'))
                            ->body(__('Studio rias pengantin telah berhasil dihapus.'))
                    ),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageWeddingOrganizers::route('/'),
        ];
    }
}

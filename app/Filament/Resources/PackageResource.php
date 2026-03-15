<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PackageResource\Pages;
use App\Models\Package;
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
 * @property-read \App\Models\Package $record
 */
class PackageResource extends Resource
{
    protected static ?string $model = Package::class;

    protected static ?string $navigationIcon = 'heroicon-o-gift';

    protected static ?int $navigationSort = 1;

    protected static ?string $recordTitleAttribute = 'name';

    public static function getModelLabel(): string
    {
        return __('Paket');
    }

    public static function getPluralModelLabel(): string
    {
        return __('Paket');
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name', 'theme', 'color'];
    }

    public static function getNavigationGroup(): ?string
    {
        return __('Studio');
    }

    public static function getNavigationLabel(): string
    {
        return __('Paket Rias');
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
        return __('Total Paket Rias');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make(__('Klasifikasi Layanan Rias'))
                    ->description(__('Atur layanan rias Anda berdasarkan kategori.'))
                    ->schema([
                        Forms\Components\Select::make('wedding_organizer_id')
                            ->label(__('Studio'))
                            ->relationship('weddingOrganizer', 'name')
                            ->default(function () {
                                /** @var WeddingOrganizer|null $record */
                                $record = WeddingOrganizer::first(['*']);

                                return $record ? $record->id : null;
                            })
                            ->searchable()
                            ->preload()
                            ->required()
                            ->hidden(function () {
                                /** @var Builder $query */
                                $query = WeddingOrganizer::query();

                                return $query->count() <= 1;
                            }),
                        Forms\Components\Select::make('category_id')
                            ->label(__('Kategori Rias'))
                            ->relationship('category', 'name')
                            ->searchable()
                            ->preload(),
                    ])->columns(['sm' => 2]),

                Forms\Components\Section::make(__('Identitas Paket'))
                    ->description(__('Penamaan utama dan detail deskriptif.'))
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label(__('Nama Paket'))
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (Forms\Set $set, ?string $state) => $set('slug', str($state)->slug())),
                        Forms\Components\TextInput::make('slug')
                            ->label(__('Slug'))
                            ->required()
                            ->unique(ignorable: fn (?Package $record) => $record)
                            ->maxLength(255),
                        Forms\Components\Textarea::make('description')
                            ->label(__('Deskripsi'))
                            ->columnSpanFull(),
                    ])->columns(['sm' => 2]),

                Forms\Components\Section::make(__('Harga & Fitur'))
                    ->description(__('Aspek finansial dan fungsional dari layanan.'))
                    ->schema([
                        Forms\Components\TextInput::make('price')
                            ->label(__('Harga Dasar'))
                            ->required()
                            ->numeric()
                            ->prefix('Rp'),
                        Forms\Components\TextInput::make('discount_price')
                            ->label(__('Harga Diskon'))
                            ->numeric()
                            ->prefix('Rp')
                            ->validationAttribute('price')
                            ->rules(['nullable', 'numeric']),
                        Forms\Components\Toggle::make('is_featured')
                            ->label(__('Paket Unggulan'))
                            ->inline(false),
                        Forms\Components\TagsInput::make('features')
                            ->label(__('Fitur'))
                            ->placeholder(__('Tambahkan fitur dan tekan enter'))
                            ->columnSpanFull(),
                    ])->columns(['sm' => 2]),

                Forms\Components\Section::make(__('Tema & Kapasitas'))
                    ->description(__('Estetika visual dan akomodasi tamu.'))
                    ->schema([
                        Forms\Components\TextInput::make('theme')
                            ->label(__('Tema'))
                            ->maxLength(255),
                        Forms\Components\ColorPicker::make('color')
                            ->label(__('Warna')),
                        Forms\Components\TextInput::make('min_capacity')
                            ->label(__('Kapasitas Minimum'))
                            ->numeric()
                            ->suffix('Pax'),
                        Forms\Components\TextInput::make('max_capacity')
                            ->label(__('Kapasitas Maksimum'))
                            ->numeric()
                            ->suffix('Pax'),
                    ])->columns(['sm' => 2]),

                Forms\Components\Section::make(__('Media Paket'))
                    ->description(__('Upload foto utama dan video portfolio paket rias ini.'))
                    ->schema([
                        Forms\Components\SpatieMediaLibraryFileUpload::make('package_image')
                            ->label(__('Foto Utama Paket'))
                            ->collection('package')
                            ->image()
                            ->imageEditor()
                            ->maxSize(102400000) // 100GB
                            ->columnSpanFull(),
                        Forms\Components\SpatieMediaLibraryFileUpload::make('videos')
                            ->label(__('Video Portfolio'))
                            ->collection('videos')
                            ->multiple()
                            ->acceptedFileTypes(['video/mp4', 'video/webm', 'video/ogg', 'video/quicktime'])
                            ->maxSize(102400000) // 100GB
                            ->maxFiles(5)
                            ->helperText(__('Upload video portfolio paket. Format: MP4, WebM, MOV. Maks 100GB per file.'))
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->mobileCards()
            ->mobileCardFeatured('price', 'rose')
            ->columns([
                Tables\Columns\TextColumn::make('weddingOrganizer.name')
                    ->label(__('Studio'))
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->label(__('Kategori'))
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->label(__('Nama Paket'))
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('slug')
                    ->label(__('Slug'))
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('description')
                    ->label(__('Deskripsi'))
                    ->limit(50)
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('price')
                    ->label(__('Harga Dasar'))
                    ->money('IDR')
                    ->sortable()
                    ->alignment('right'),
                Tables\Columns\TextColumn::make('theme')
                    ->label(__('Tema'))
                    ->searchable()
                    ->alignment('center'),
                Tables\Columns\TextColumn::make('color')
                    ->label(__('Warna'))
                    ->searchable()
                    ->alignment('center')
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('min_capacity')
                    ->label(__('Min Pax'))
                    ->numeric()
                    ->sortable()
                    ->alignment('center'),
                Tables\Columns\TextColumn::make('max_capacity')
                    ->label(__('Max Pax'))
                    ->numeric()
                    ->sortable()
                    ->alignment('center'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label(__('Dibuat Pada'))
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
                            ->title(__('Paket diperbarui'))
                            ->body(__('Paket telah berhasil diperbarui.'))
                    ),
                Tables\Actions\DeleteAction::make()
                    ->button()
                    ->color('danger')
                    ->size('lg')
                    ->successNotification(
                        Notification::make()
                            ->success()
                            ->title(__('Paket dihapus'))
                            ->body(__('Paket telah berhasil dihapus.'))
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
            'index' => Pages\ManagePackages::route('/'),
        ];
    }
}

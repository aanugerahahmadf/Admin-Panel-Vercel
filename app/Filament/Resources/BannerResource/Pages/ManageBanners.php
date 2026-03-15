<?php

namespace App\Filament\Resources\BannerResource\Pages;

use App\Filament\Exports\BannerExporter;
use App\Filament\Resources\BannerResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ManageRecords;

/**
 * @property-read \App\Filament\Resources\BannerResource $resource
 */
class ManageBanners extends ManageRecords
{
    protected static string $resource = BannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ExportAction::make()
                ->exporter(BannerExporter::class)
                ->label(__('Ekspor Data'))
                ->icon('heroicon-o-arrow-down-tray')
                ->color('success'),
            Actions\CreateAction::make()
                ->label(__('Tambah Banner'))
                ->icon('heroicon-o-plus')
                ->successNotification(
                    Notification::make()
                        ->success()
                        ->title(__('Banner Ditambahkan'))
                        ->body(__('Banner baru telah berhasil ditambahkan.'))
                ),
        ];
    }
}

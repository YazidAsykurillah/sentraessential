<?php

namespace App\Filament\Resources\WebsiteSettings\Pages;

use App\Filament\Resources\WebsiteSettings\WebsiteSettingResource;
use Filament\Resources\Pages\ListRecords;
use App\Models\WebsiteSetting;


class ListWebsiteSettings extends ListRecords
{
    protected static string $resource = WebsiteSettingResource::class;

    protected function getHeaderActions(): array
    {
        return WebsiteSetting::count() === 0
        ? [
            CreateAction::make(),
        ]
        : [];
    }
}
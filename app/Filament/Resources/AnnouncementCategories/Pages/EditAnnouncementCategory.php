<?php

namespace App\Filament\Resources\AnnouncementCategories\Pages;

use App\Filament\Resources\AnnouncementCategories\AnnouncementCategoryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAnnouncementCategory extends EditRecord
{
    protected static string $resource = AnnouncementCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

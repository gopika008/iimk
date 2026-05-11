<?php

namespace App\Filament\Resources\AnnouncementCategories\Pages;

use App\Filament\Resources\AnnouncementCategories\AnnouncementCategoryResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAnnouncementCategory extends CreateRecord
{
    protected static string $resource = AnnouncementCategoryResource::class;
}

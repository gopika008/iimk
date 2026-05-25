<?php

namespace App\Filament\Resources\StudentDirectories\Pages;

use App\Filament\Resources\StudentDirectories\StudentDirectoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListStudentDirectories extends ListRecords
{
    protected static string $resource = StudentDirectoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

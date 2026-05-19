<?php

namespace App\Filament\Resources\ProgrammeButtons\Pages;

use App\Filament\Resources\ProgrammeButtons\ProgrammeButtonResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListProgrammeButtons extends ListRecords
{
    protected static string $resource = ProgrammeButtonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

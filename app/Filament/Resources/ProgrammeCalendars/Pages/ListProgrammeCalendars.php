<?php

namespace App\Filament\Resources\ProgrammeCalendars\Pages;

use App\Filament\Resources\ProgrammeCalendars\ProgrammeCalendarResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListProgrammeCalendars extends ListRecords
{
    protected static string $resource = ProgrammeCalendarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

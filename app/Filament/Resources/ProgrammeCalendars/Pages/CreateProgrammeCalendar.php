<?php

namespace App\Filament\Resources\ProgrammeCalendars\Pages;

use App\Filament\Resources\ProgrammeCalendars\ProgrammeCalendarResource;
use Filament\Resources\Pages\CreateRecord;

class CreateProgrammeCalendar extends CreateRecord
{
    protected static string $resource = ProgrammeCalendarResource::class;
    protected function afterCreate(): void
{
    $this->record->faculties()->sync(
        $this->data['faculties'] ?? []
    );
}
}

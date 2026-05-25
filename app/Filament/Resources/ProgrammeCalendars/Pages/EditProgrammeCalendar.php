<?php

namespace App\Filament\Resources\ProgrammeCalendars\Pages;

use App\Filament\Resources\ProgrammeCalendars\ProgrammeCalendarResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditProgrammeCalendar extends EditRecord
{
    protected static string $resource = ProgrammeCalendarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
    protected function afterSave(): void
    {
        $this->record->faculties()->sync(
            $this->data['faculties'] ?? []
        );
    }
}

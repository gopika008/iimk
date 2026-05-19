<?php

namespace App\Filament\Resources\ProgrammeButtons\Pages;

use App\Filament\Resources\ProgrammeButtons\ProgrammeButtonResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditProgrammeButton extends EditRecord
{
    protected static string $resource = ProgrammeButtonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

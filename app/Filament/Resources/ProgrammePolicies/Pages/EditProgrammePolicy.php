<?php

namespace App\Filament\Resources\ProgrammePolicies\Pages;

use App\Filament\Resources\ProgrammePolicies\ProgrammePolicyResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditProgrammePolicy extends EditRecord
{
    protected static string $resource = ProgrammePolicyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

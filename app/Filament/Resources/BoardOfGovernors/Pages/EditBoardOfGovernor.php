<?php

namespace App\Filament\Resources\BoardOfGovernors\Pages;

use App\Filament\Resources\BoardOfGovernors\BoardOfGovernorResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditBoardOfGovernor extends EditRecord
{
    protected static string $resource = BoardOfGovernorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

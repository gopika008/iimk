<?php

namespace App\Filament\Resources\BoardOfGovernors\Pages;

use App\Filament\Resources\BoardOfGovernors\BoardOfGovernorResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBoardOfGovernors extends ListRecords
{
    protected static string $resource = BoardOfGovernorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

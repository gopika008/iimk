<?php

namespace App\Filament\Resources\ProgrammePolicies\Pages;

use App\Filament\Resources\ProgrammePolicies\ProgrammePolicyResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListProgrammePolicies extends ListRecords
{
    protected static string $resource = ProgrammePolicyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

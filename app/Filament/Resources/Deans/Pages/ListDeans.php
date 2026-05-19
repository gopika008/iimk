<?php

namespace App\Filament\Resources\Deans\Pages;

use App\Filament\Resources\Deans\DeanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDeans extends ListRecords
{
    protected static string $resource = DeanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

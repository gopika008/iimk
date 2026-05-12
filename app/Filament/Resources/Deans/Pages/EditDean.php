<?php

namespace App\Filament\Resources\Deans\Pages;

use App\Filament\Resources\Deans\DeanResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDean extends EditRecord
{
    protected static string $resource = DeanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

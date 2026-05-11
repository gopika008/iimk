<?php

namespace App\Filament\Resources\Tabs\Pages;

use App\Filament\Resources\Tabs\TabResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTab extends EditRecord
{
    protected static string $resource = TabResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

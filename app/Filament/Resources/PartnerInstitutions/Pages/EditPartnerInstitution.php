<?php

namespace App\Filament\Resources\PartnerInstitutions\Pages;

use App\Filament\Resources\PartnerInstitutions\PartnerInstitutionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPartnerInstitution extends EditRecord
{
    protected static string $resource = PartnerInstitutionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

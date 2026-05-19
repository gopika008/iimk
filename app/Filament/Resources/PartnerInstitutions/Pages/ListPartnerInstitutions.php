<?php

namespace App\Filament\Resources\PartnerInstitutions\Pages;

use App\Filament\Resources\PartnerInstitutions\PartnerInstitutionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPartnerInstitutions extends ListRecords
{
    protected static string $resource = PartnerInstitutionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

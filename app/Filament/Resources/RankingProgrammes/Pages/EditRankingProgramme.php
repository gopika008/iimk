<?php

namespace App\Filament\Resources\RankingProgrammes\Pages;

use App\Filament\Resources\RankingProgrammes\RankingProgrammeResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditRankingProgramme extends EditRecord
{
    protected static string $resource = RankingProgrammeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

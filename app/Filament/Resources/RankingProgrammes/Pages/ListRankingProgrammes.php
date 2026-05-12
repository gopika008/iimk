<?php

namespace App\Filament\Resources\RankingProgrammes\Pages;

use App\Filament\Resources\RankingProgrammes\RankingProgrammeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListRankingProgrammes extends ListRecords
{
    protected static string $resource = RankingProgrammeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\VisitingProfessors\Pages;

use App\Filament\Resources\VisitingProfessors\VisitingProfessorResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListVisitingProfessors extends ListRecords
{
    protected static string $resource = VisitingProfessorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\VisitingProfessors\Pages;

use App\Filament\Resources\VisitingProfessors\VisitingProfessorResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditVisitingProfessor extends EditRecord
{
    protected static string $resource = VisitingProfessorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

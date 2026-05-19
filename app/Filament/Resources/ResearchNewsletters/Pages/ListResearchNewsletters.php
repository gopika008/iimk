<?php

namespace App\Filament\Resources\ResearchNewsletters\Pages;

use App\Filament\Resources\ResearchNewsletters\ResearchNewsletterResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListResearchNewsletters extends ListRecords
{
    protected static string $resource = ResearchNewsletterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\ResearchNewsletters\Pages;

use App\Filament\Resources\ResearchNewsletters\ResearchNewsletterResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditResearchNewsletter extends EditRecord
{
    protected static string $resource = ResearchNewsletterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

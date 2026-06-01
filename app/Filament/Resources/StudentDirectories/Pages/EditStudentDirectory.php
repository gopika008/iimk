<?php

namespace App\Filament\Resources\StudentDirectories\Pages;

use App\Filament\Resources\StudentDirectories\StudentDirectoryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditStudentDirectory extends EditRecord
{
    protected static string $resource = StudentDirectoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
    public function getMaxContentWidth(): ?string
{
    return 'full';
}
}

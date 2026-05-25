<?php

namespace App\Filament\Resources\StudentDirectories\Pages;

use App\Filament\Resources\StudentDirectories\StudentDirectoryResource;
use Filament\Resources\Pages\CreateRecord;

class CreateStudentDirectory extends CreateRecord
{
    protected static string $resource = StudentDirectoryResource::class;
}

<?php

namespace App\Filament\Resources\AnnualReports\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AnnualReportForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('year')
                    ->required(),
                TextInput::make('english_report')
                    ->default(null),
                TextInput::make('hindi_report')
                    ->default(null),
            ]);
    }
}

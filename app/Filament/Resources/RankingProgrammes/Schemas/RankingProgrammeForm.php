<?php

namespace App\Filament\Resources\RankingProgrammes\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class RankingProgrammeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('category_id')
                    ->required()
                    ->numeric(),
                Textarea::make('programme_name')
                    ->required()
                    ->columnSpanFull(),
                Select::make('ranking_type')
                    ->options(['international' => 'International', 'national' => 'National'])
                    ->required(),
                TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),
                TextInput::make('status')
                    ->numeric()
                    ->default(1),
            ]);
    }
}

<?php

namespace App\Filament\Resources\RankingProgrammes\RelationManagers;

use Filament\Schemas\Schema;
use App\Filament\Resources\RankingProgrammes\RankingProgrammeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;
use Filament\Tables\Columns\{
    TextColumn,
    BadgeColumn,
    IconColumn,
};

use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\{
    TextInput,
    FileUpload,
    RichEditor,
    Toggle,
    Select
};

class ValuesRelationManager extends RelationManager
{
    protected static string $relationship = 'values';

    // protected static ?string $relatedResource = RankingProgrammeResource::class;

    public function form(Schema $schema): Schema
    {
        return $schema
            ->schema([

                TextInput::make('ranking_year')
                    ->numeric()
                    ->minValue(1900)
                    ->maxValue(2100)
                    ->required(),

                Select::make('rank_scope')
                    ->options([
                        'Global' => 'Global',
                        'Asia' => 'Asia',
                        'National' => 'National',
                    ])
                    ->required(),

                TextInput::make('rank_value'),
                TextInput::make('rank_url')
                    ->label('Rank URL')
                    ->url()

            ]);
    }
    public function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('ranking_year'),

                TextColumn::make('rank_scope'),

                TextColumn::make('rank_value'),

            ])

            ->headerActions([
                CreateAction::make(),
            ])

            ->actions([
                \Filament\Actions\EditAction::make(),
                \Filament\Actions\DeleteAction::make(),
            ]);
    }
}

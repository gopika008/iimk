<?php

namespace App\Filament\Resources\RankingProgrammes;

use App\Filament\Resources\RankingProgrammes\Pages\CreateRankingProgramme;
use App\Filament\Resources\RankingProgrammes\Pages\EditRankingProgramme;
use App\Filament\Resources\RankingProgrammes\Pages\ListRankingProgrammes;
use App\Filament\Resources\RankingProgrammes\Schemas\RankingProgrammeForm;
use App\Filament\Resources\RankingProgrammes\Tables\RankingProgrammesTable;
use App\Models\RankingProgramme;
use BackedEnum;
use Filament\Forms\Components\Hidden;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Tables\Columns\{
    TextColumn,
    BadgeColumn,
    IconColumn,
};
use Filament\Actions\EditAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\BulkActionGroup;
use App\Helpers\Translator;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\{
    TextInput,
    FileUpload,
    RichEditor,
    Toggle,
    Select
};
use UnitEnum;

class RankingProgrammeResource extends Resource
{
    protected static ?string $model = RankingProgramme::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedTrophy;
    protected static ?string $navigationLabel = 'Accreditation & Rankings';
    protected static string|UnitEnum|null $navigationGroup = 'The Institute';
    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([

                TextInput::make('programme_name')
                    ->required()
                    ->maxLength(255),

                Select::make('ranking_type')
                    ->options([
                        'international' => 'International',
                        'national' => 'National',
                    ])
                    ->required()
                    ->live()
                    ->afterStateUpdated(function ($state, callable $set) {

                        if ($state === 'international') {
                            $set('category_id', 1);
                        }

                        if ($state === 'national') {
                            $set('category_id', 2);
                        }
                    }),
                    Hidden::make('category_id'),

                TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),

                Toggle::make('status')
                    ->default(true),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('programme_name')
                    ->searchable(),

                BadgeColumn::make('ranking_type'),

                TextColumn::make('sort_order'),

                IconColumn::make('status')
                    ->boolean(),

            ])

            ->actions([
                \Filament\Actions\EditAction::make(),
                \Filament\Actions\DeleteAction::make(),
            ])

            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\ValuesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListRankingProgrammes::route('/'),
            'create' => CreateRankingProgramme::route('/create'),
            'edit' => EditRankingProgramme::route('/{record}/edit'),
        ];
    }
}

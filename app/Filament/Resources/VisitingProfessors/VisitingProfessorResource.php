<?php

namespace App\Filament\Resources\VisitingProfessors;

use App\Filament\Resources\VisitingProfessors\Pages\CreateVisitingProfessor;
use App\Filament\Resources\VisitingProfessors\Pages\EditVisitingProfessor;
use App\Filament\Resources\VisitingProfessors\Pages\ListVisitingProfessors;
// use App\Models\VisitingProfessor;
use App\Models\Member;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

use App\Filament\Clusters\Members\MembersCluster;

use Filament\Forms\Components\Hidden;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\RichEditor;
class VisitingProfessorResource extends Resource
{
    protected static ?string $model = Member::class;

    protected static ?string $cluster = MembersCluster::class;

    protected static ?string $navigationLabel =
    'Visiting Professors';

    protected static string|BackedEnum|null $navigationIcon =
    Heroicon::OutlinedIdentification;

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->where('type_code', 'visiting_professor');
    }

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([

            TextInput::make('name')
                ->required(),

            TextInput::make('designation'),

            TextInput::make('type')
                ->default('Visiting Professors')->readonly(),

            Hidden::make('type_code')
                ->default('visiting_professor'),
            RichEditor::make('description')
                ->columnSpanFull(),

            FileUpload::make('image')
                ->image()
                ->directory('members'),

            TextInput::make('url')
                ->url()
                ->prefix('https://'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                ImageColumn::make('image')
                    ->circular(),

                TextColumn::make('name')
                    ->searchable(),

                TextColumn::make('designation'),
                TextColumn::make('type'),

                TextColumn::make('created_at')
                    ->dateTime(),
            ])
            ->actions([
                \Filament\Actions\EditAction::make(),
                \Filament\Actions\DeleteAction::make(),
            ]);
    }


    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListVisitingProfessors::route('/'),
            'create' => CreateVisitingProfessor::route('/create'),
            'edit' => EditVisitingProfessor::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources\ResearchNewsletters;

use App\Filament\Resources\ResearchNewsletters\Pages\CreateResearchNewsletter;
use App\Filament\Resources\ResearchNewsletters\Pages\EditResearchNewsletter;
use App\Filament\Resources\ResearchNewsletters\Pages\ListResearchNewsletters;

use App\Models\ResearchNewsletter;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use UnitEnum;
class ResearchNewsletterResource extends Resource
{
    protected static ?string $model = ResearchNewsletter::class;
    protected static ?string $navigationLabel = 'Research Newsletters';
    protected static string|UnitEnum|null $navigationGroup = 'Research';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            TextInput::make('title')
                ->required(),

            TextInput::make('volume'),
            FileUpload::make('pdf')
                ->acceptedFileTypes(['application/pdf'])
                ->disk('public')
                ->directory('newsletters')
                ->visibility('public')
                ->required(),


        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable()->sortable(),
                TextColumn::make('volume')->searchable()->sortable(),
                TextColumn::make('pdf')->label('PDF')->formatStateUsing(function ($state) {
                    return $state ? 'Available' : 'Not Available';
                }),
            ])
            ->filters([
                //
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
            'index' => ListResearchNewsletters::route('/'),
            'create' => CreateResearchNewsletter::route('/create'),
            'edit' => EditResearchNewsletter::route('/{record}/edit'),
        ];
    }
}

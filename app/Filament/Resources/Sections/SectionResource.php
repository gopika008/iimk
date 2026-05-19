<?php

namespace App\Filament\Resources\Sections;

use App\Filament\Resources\Sections\Pages\CreateSection;
use App\Filament\Resources\Sections\Pages\EditSection;
use App\Filament\Resources\Sections\Pages\ListSections;
use App\Filament\Resources\Sections\Schemas\SectionForm;
use App\Filament\Resources\Sections\Tables\SectionsTable;
use App\Models\Section;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\{
    TextInput,
    Select
};
use UnitEnum;
use Illuminate\Database\Eloquent\Builder;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;

class SectionResource extends Resource
{
    protected static ?string $model = Section::class;
    protected static ?string $navigationLabel = 'Sections';
    protected static string|UnitEnum|null $navigationGroup = 'Faculty Management';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    // protected static ?string $recordTitleAttribute = 'name';

public static function form(Schema $schema): Schema
{
    return $schema->schema([

        Tabs::make('Languages')
            ->tabs([

                /*
                |--------------------------------------------------------------------------
                | ENGLISH
                |--------------------------------------------------------------------------
                */
                Tab::make('English')
                    ->schema([

                        Select::make('tab_id')
                            ->label('Tab')
                            ->options(
                                \App\Models\Tab::all()->mapWithKeys(fn ($tab) => [

                                    $tab->id =>

                                        $tab->name['en'] ?? ''

                                ])
                            )
                            ->searchable()
                            ->required(),

                        TextInput::make('heading.en')
                            ->label('Heading')
                            ->required(),

                        TextInput::make('order')
                            ->label('Order')
                            ->numeric()
                            ->default(0),

                    ]),

                /*
                |--------------------------------------------------------------------------
                | HINDI
                |--------------------------------------------------------------------------
                */
                Tab::make('Hindi')
                    ->schema([

                        Select::make('tab_id')
                            ->label('टैब')
                            ->options(
                                \App\Models\Tab::all()->mapWithKeys(fn ($tab) => [

                                    $tab->id =>

                                        $tab->name['hi'] ?? ''

                                ])
                            )
                            ->searchable()
                            ->disabled(),

                        TextInput::make('heading.hi')
                            ->label('शीर्षक'),

                        TextInput::make('order')
                            ->label('क्रम')
                            ->disabled(),

                    ]),

            ])
            ->columnSpanFull(),

    ]);
}
    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('tab.name')
                ->badge()
                ->color('primary'),

            TextColumn::make('heading'),

            TextColumn::make('order'),
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
            'index' => ListSections::route('/'),
            'create' => CreateSection::route('/create'),
            'edit' => EditSection::route('/{record}/edit'),
        ];
    }


    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->with('tab');
    }
}

<?php

namespace App\Filament\Resources\Tabs;

use App\Filament\Resources\Tabs\Pages\CreateTab;
use App\Filament\Resources\Tabs\Pages\EditTab;
use App\Filament\Resources\Tabs\Pages\ListTabs;
use App\Filament\Resources\Tabs\Schemas\TabForm;
use App\Filament\Resources\Tabs\Tables\TabsTable;
use App\Models\Tab as TabModel;;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;

class TabResource extends Resource
{
    protected static ?string $model = TabModel::class;
    protected static ?string $navigationLabel = 'Tabs';
    protected static string|UnitEnum|null $navigationGroup = 'Faculty Management';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;


    public static function form(Schema $schema): Schema
    {
        return $schema->schema([

            Tabs::make('Languages')
                ->tabs([

                    Tab::make('English')
                        ->schema([

                            TextInput::make('name.en')
                                ->label('Name')
                                ->required()
                                ->live(onBlur: true)
                                ->afterStateUpdated(
                                    fn($state, callable $set) =>
                                    $set('slug', str()->slug($state))
                                ),

                        ]),

                    Tab::make('Hindi')
                        ->schema([

                            TextInput::make('name.hi')
                                ->label('नाम'),

                        ]),

                ])
                ->columnSpanFull(),

            TextInput::make('slug')
                ->disabled()
                ->dehydrated(),

            TextInput::make('order')
                ->numeric()
                ->default(0),

        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('name'),
            TextColumn::make('slug'),
            TextColumn::make('order'),
        ])->actions([
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
            'index' => ListTabs::route('/'),
            'create' => CreateTab::route('/create'),
            'edit' => EditTab::route('/{record}/edit'),
        ];
    }
}

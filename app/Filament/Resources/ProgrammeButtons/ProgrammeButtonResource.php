<?php

namespace App\Filament\Resources\ProgrammeButtons;

use App\Filament\Resources\ProgrammeButtons\Pages\CreateProgrammeButton;
use App\Filament\Resources\ProgrammeButtons\Pages\EditProgrammeButton;
use App\Filament\Resources\ProgrammeButtons\Pages\ListProgrammeButtons;
use App\Filament\Resources\ProgrammeButtons\Schemas\ProgrammeButtonForm;
use App\Filament\Resources\ProgrammeButtons\Tables\ProgrammeButtonsTable;
use App\Models\ProgrammeButton;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use UnitEnum;
use Filament\Schemas\Components\Section;

class ProgrammeButtonResource extends Resource
{
    protected static ?string $model = ProgrammeButton::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedAcademicCap;

    protected static string|UnitEnum|null $navigationGroup = 'Programmes';

    protected static ?string $navigationLabel = 'Admission Buttons';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Section::make('Programme Link Details')
                ->description('Manage programme-related links and resources')
                ->icon('heroicon-o-link')
                ->schema([

                    Select::make('programme_id')
                        ->relationship('programme', 'name')
                        ->searchable()
                        ->required(),

                    TextInput::make('label')
                        ->required(),

                    TextInput::make('url')
                        ->url()
                        ->required(),
                         TextInput::make('sort_order')
                        ->numeric()
                        ->default(0),

                    Toggle::make('new_tab')
                        ->default(true),

                    Toggle::make('is_active')
                        ->default(true),



                ])
                ->columns(2)
                ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('programme.name'),

                TextColumn::make('label'),

                TextColumn::make('url')
                    ->limit(40),

                IconColumn::make('is_active')
                    ->boolean(),

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
            'index' => ListProgrammeButtons::route('/'),
            'create' => CreateProgrammeButton::route('/create'),
            'edit' => EditProgrammeButton::route('/{record}/edit'),
        ];
    }
}

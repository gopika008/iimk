<?php

namespace App\Filament\Resources\ProgrammePolicies;

use App\Filament\Resources\ProgrammePolicies\Pages\CreateProgrammePolicy;
use App\Filament\Resources\ProgrammePolicies\Pages\EditProgrammePolicy;
use App\Filament\Resources\ProgrammePolicies\Pages\ListProgrammePolicies;
use App\Filament\Resources\ProgrammePolicies\Schemas\ProgrammePolicyForm;
use App\Filament\Resources\ProgrammePolicies\Tables\ProgrammePoliciesTable;
use App\Models\ProgrammePolicy;
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

class ProgrammePolicyResource extends Resource
{
    protected static ?string $model = ProgrammePolicy::class;
        protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedClipboardDocumentList;

    protected static ?string $navigationLabel = 'Admission Policies';
    protected static string|UnitEnum|null $navigationGroup = 'Programmes';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Section::make('Programme Policy Details')
                ->description('Manage programme-related policies and documents')
                ->icon('heroicon-o-clipboard-document-list')
                ->schema([

            Select::make('programme_id')
                ->relationship('programme', 'name')
                ->searchable()
                ->required(),

            TextInput::make('title')
                ->required(),

            FileUpload::make('file')
                ->disk('public')
                ->directory('programme-policies')
                ->downloadable()
                ->openable()
                ->required(),



            TextInput::make('sort_order')
                ->numeric()
                ->default(0),
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

                TextColumn::make('programme.name')
                    ->searchable(),

                TextColumn::make('title')
                    ->searchable(),

                IconColumn::make('is_active')
                    ->boolean(),

                TextColumn::make('sort_order'),

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
            'index' => ListProgrammePolicies::route('/'),
            'create' => CreateProgrammePolicy::route('/create'),
            'edit' => EditProgrammePolicy::route('/{record}/edit'),
        ];
    }
}

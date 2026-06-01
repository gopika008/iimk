<?php

namespace App\Filament\Resources\PartnerInstitutions;

use App\Filament\Resources\PartnerInstitutions\Pages\CreatePartnerInstitution;
use App\Filament\Resources\PartnerInstitutions\Pages\EditPartnerInstitution;
use App\Filament\Resources\PartnerInstitutions\Pages\ListPartnerInstitutions;
use App\Filament\Resources\PartnerInstitutions\Schemas\PartnerInstitutionForm;
use App\Filament\Resources\PartnerInstitutions\Tables\PartnerInstitutionsTable;
use App\Models\PartnerInstitution;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use UnitEnum;
class PartnerInstitutionResource extends Resource
{
    protected static ?string $model = PartnerInstitution::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBuildingOffice2;

    protected static string|UnitEnum|null $navigationGroup = 'Programmes';

protected static ?string $navigationLabel = 'Partner Institutions';

    public static function form(Schema $schema): Schema
    {
    return $schema
        ->schema([

            Select::make('continent')
                ->options([
                    'North America' => 'North America',
                    'South America' => 'South America',
                    'Asia' => 'Asia',
                    'Europe' => 'Europe',
                    'Australia/Oceania' => 'Australia/Oceania',
                    'Africa' => 'Africa',
                    'Russia' => 'Russia',
                ])
                ->required(),

            TextInput::make('name')
                ->required(),

            // TextInput::make('country'),

            // TextInput::make('city'),

            FileUpload::make('logo')
                ->image()
                ->disk('public')
                ->directory('partner-institutions')
                ->imagePreviewHeight('100'),

            TextInput::make('website')
                ->url(),

            Textarea::make('description')
                ->rows(4),

            TextInput::make('sort_order')
                ->numeric()
                ->default(0),

            Toggle::make('is_active')
                ->default(true),

        ]);
    }

    public static function table(Table $table): Table
    {

    return $table
        ->columns([

            TextColumn::make('continent')
                ->sortable()
                ->searchable(),

            TextColumn::make('name')
                ->searchable(),

            // TextColumn::make('country'),

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
            'index' => ListPartnerInstitutions::route('/'),
            'create' => CreatePartnerInstitution::route('/create'),
            'edit' => EditPartnerInstitution::route('/{record}/edit'),
        ];
    }
}

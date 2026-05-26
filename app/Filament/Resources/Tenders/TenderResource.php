<?php

namespace App\Filament\Resources\Tenders;

use App\Filament\Resources\Tenders\Pages\CreateTender;
use App\Filament\Resources\Tenders\Pages\EditTender;
use App\Filament\Resources\Tenders\Pages\ListTenders;
use App\Filament\Resources\Tenders\Schemas\TenderForm;
use App\Filament\Resources\Tenders\Tables\TendersTable;
use App\Models\Tender;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;

class TenderResource extends Resource
{
    protected static ?string $model = Tender::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
            return $schema
        ->schema([

            TextInput::make('title')
                ->required()
                ->maxLength(255),

            TextInput::make('tender_no')
                ->required()
                ->unique(ignoreRecord: true),

            DateTimePicker::make('closing_date')
                ->required(),

            DateTimePicker::make('opening_date')
                ->required(),

            Select::make('type')
                ->options([
                    'normal' => 'Normal',
                    'etender' => 'E-Tender',
                ])
                ->required(),

            Toggle::make('collect_user_info')
                ->label('Collect User Information')
                ->default(false),

            FileUpload::make('tender_document')
                ->directory('tenders')
                ->acceptedFileTypes(['application/pdf'])
                ->downloadable()
                ->openable(),

        ]);
    }

    public static function table(Table $table): Table
    {
         return $table
        ->columns([

            TextColumn::make('title')
                ->searchable(),

            TextColumn::make('tender_no'),

            TextColumn::make('type')
                ->badge(),

            TextColumn::make('closing_date')
                ->dateTime(),

            TextColumn::make('opening_date')
                ->dateTime(),

            IconColumn::make('collect_user_info')
                ->boolean(),

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
            'index' => ListTenders::route('/'),
            'create' => CreateTender::route('/create'),
            'edit' => EditTender::route('/{record}/edit'),
        ];
    }
}

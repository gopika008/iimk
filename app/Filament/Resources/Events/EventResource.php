<?php

namespace App\Filament\Resources\Events;

use App\Filament\Resources\Events\Pages\CreateEvent;
use App\Filament\Resources\Events\Pages\EditEvent;
use App\Filament\Resources\Events\Pages\ListEvents;
use App\Filament\Resources\Events\Schemas\EventForm;
use App\Filament\Resources\Events\Tables\EventsTable;
use App\Models\Event;
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
class EventResource extends Resource
{
    protected static ?string $model = Event::class;
protected static ?string $navigationLabel = 'Events';
    protected static string|UnitEnum|null $navigationGroup = 'The Institute';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([

            TextInput::make('title')
                ->required()
                ->maxLength(255),

            Select::make('type')
                ->options([
                    'conference' => 'Conference',
                    'seminar' => 'Seminar',
                    'workshop' => 'Workshop',
                ])
                ->required(),

            DatePicker::make('start_date')
                ->required(),

            DatePicker::make('end_date'),

            TextInput::make('venue')
                ->maxLength(255),

            FileUpload::make('banner')
                ->image()
                ->directory('events/banners')
                ->imagePreviewHeight('150')
                ->downloadable()
                ->openable(),

            FileUpload::make('brochure')
                ->label('Event Brochure')
                ->directory('events/brochures')
                ->acceptedFileTypes(['application/pdf'])
                ->downloadable()
                ->openable(),

            RichEditor::make('description')
                ->columnSpanFull(),

            TextInput::make('registration_url')
                ->label('Registration URL')
                ->url()
                ->prefix('https://'),

            Toggle::make('is_active')
                ->default(true),

        ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([

            ImageColumn::make('banner')
                ->square(),

            TextColumn::make('title')
                ->searchable()
                ->sortable(),

            TextColumn::make('type')
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    'conference' => 'success',
                    'seminar' => 'warning',
                    'workshop' => 'info',
                }),

            TextColumn::make('start_date')
                ->date(),

            TextColumn::make('venue')
                ->limit(25),

            IconColumn::make('is_active')
                ->boolean(),

        ])
        ->defaultSort('start_date', 'desc')
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
            'index' => ListEvents::route('/'),
            'create' => CreateEvent::route('/create'),
            'edit' => EditEvent::route('/{record}/edit'),
        ];
    }
}

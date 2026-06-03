<?php

namespace App\Filament\Resources\ProgrammeCalendars;

use App\Filament\Resources\ProgrammeCalendars\Pages\CreateProgrammeCalendar;
use App\Filament\Resources\ProgrammeCalendars\Pages\EditProgrammeCalendar;
use App\Filament\Resources\ProgrammeCalendars\Pages\ListProgrammeCalendars;

use App\Models\ProgrammeCalendar;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use App\Models\Faculty;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Components\Section;


use Filament\Actions\Action;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ProgrammeCalendarImport;
use Filament\Facades\Filament;
use Stichoza\GoogleTranslate\GoogleTranslate;
class ProgrammeCalendarResource extends Resource
{
    protected static ?string $model = ProgrammeCalendar::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCalendar;
    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        // return ProgrammeCalendarForm::configure($schema);
      return $schema->schema([

    Section::make('Programme Calendar')
        ->description('Manage programme details, facilitators, fees and schedule')
        ->icon('heroicon-o-calendar-days')
        ->schema([

            Select::make('calendar_type')
                ->options([
                    'e-MDP Calendar' => 'e-MDP Calendar',
                    'Async eMDP Calendar' => 'Async eMDP Calendar',
                    'Open MDP Calendar' => 'Open MDP Calendar',
                    'Open FDP Calendar' => 'Open FDP Calendar',
                ])
                ->required(),

            Select::make('academic_year')
                ->options(function () {
                    $years = [];
                    $currentYear = now()->year - 2;

                    for ($i = 0; $i < 6; $i++) {
                        $start = $currentYear + $i;
                        $end = $start + 1;

                        $years["{$start}-{$end}"] = "{$start}-{$end}";
                    }

                    return $years;
                })
                ->required(),

            Section::make('English Content')
                ->schema([

                    TextInput::make('programme_title.en')
                        ->label('Programme Title (English)')
                        ->required()
                        ->live(onBlur: true)
                        ->afterStateUpdated(function ($state, callable $set) {
                            if (filled($state)) {
                                $set(
                                    'programme_title.hi',
                                    GoogleTranslate::trans($state, 'hi', 'en')
                                );
                            }
                        }),

                    TextInput::make('venue.en')
                        ->label('Venue (English)')
                        ->live(onBlur: true)
                        ->afterStateUpdated(function ($state, callable $set) {
                            if (filled($state)) {
                                $set(
                                    'venue.hi',
                                    GoogleTranslate::trans($state, 'hi', 'en')
                                );
                            }
                        }),

                ])
                ->columnSpan(1),

            Section::make('Hindi Content')
                ->schema([

                    TextInput::make('programme_title.hi')
                        ->label('Programme Title (Hindi)')
                        ->required(),

                    TextInput::make('venue.hi')
                        ->label('Venue (Hindi'),

                ])
                ->columnSpan(1),

            Select::make('faculties')
                ->label('Facilitators')
                ->multiple()
                ->options(
                    Faculty::all()->mapWithKeys(fn ($faculty) => [
                        $faculty->id =>
                            $faculty->name['en']
                            ?? $faculty->name['hi']
                            ?? 'N/A',
                    ])
                )
                ->searchable()
                ->preload()
                ->dehydrated(false)
                ->afterStateHydrated(function ($component, $record) {
                    if ($record) {
                        $component->state(
                            $record->faculties->pluck('id')->toArray()
                        );
                    }
                })
                ->columnSpanFull(),

            DatePicker::make('programme_date')
                ->required(),

            TextInput::make('registration_link')
                ->label('Registration Link')
                ->url()
                ->columnSpanFull(),

            FileUpload::make('brochure_pdf')
                ->label('Brochure PDF')
                ->directory('programme-calendars')
                ->acceptedFileTypes(['application/pdf'])
                ->downloadable()
                ->openable()
                ->columnSpanFull(),

            Section::make('Programme Fees')
                ->description('Configure programme fee structure')
                ->icon('heroicon-o-currency-rupee')
                ->schema([

                    Select::make('fee_type')
                        ->label('Fee Structure')
                        ->options([
                            'residential' => 'Residential / Non-Residential',
                            'simple' => 'Simple Fee',
                        ])
                        ->reactive()
                        ->required(),

                    TextInput::make('fee.residential_fee')
                        ->label('Residential Fee')
                        ->numeric()
                        ->prefix('₹')
                        ->visible(
                            fn ($get) =>
                            $get('fee_type') === 'residential'
                        ),

                    TextInput::make('fee.non_residential_fee')
                        ->label('Non-Residential Fee')
                        ->numeric()
                        ->prefix('₹')
                        ->visible(
                            fn ($get) =>
                            $get('fee_type') === 'residential'
                        ),

                    TextInput::make('fee.fee')
                        ->label('Programme Fee')
                        ->numeric()
                        ->prefix('₹')
                        ->visible(
                            fn ($get) =>
                            $get('fee_type') === 'simple'
                        ),

                    Toggle::make('fee.gst_applicable')
                        ->label('GST Applicable')
                        ->default(true),

                ])
                ->columns(2)
                ->columnSpanFull()
                ->collapsible(),

        ])
        ->columns(2)
        ->columnSpanFull(),

]);
    }

    public static function table(Table $table): Table
    {
        // return ProgrammeCalendarsTable::configure($table);
           return $table
        ->columns([
 TextColumn::make('programme_title')
                ->label('Programme Title')
                ->formatStateUsing(
                    fn ($record) => $record->getTranslation('programme_title', 'en')
                )
                ->description(
                    fn ($record) => $record->getTranslation('programme_title', 'hi')
                )
                ->wrap()
                ->searchable(),

            TextColumn::make('venue')
                ->label('Venue')
                ->formatStateUsing(
                    fn ($record) => $record->getTranslation('venue', 'en')
                )
                ->description(
                    fn ($record) => $record->getTranslation('venue', 'hi')
                )
                ->wrap(),

            TextColumn::make('calendar_type')
                ->label('Calendar')
                ->badge()
                ->color('primary')
                ->sortable(),

            TextColumn::make('academic_year')
                ->label('Academic Year')
                ->badge()
                ->color('gray'),

            TextColumn::make('programme_date')
                ->label('Programme Date')
                ->date('d M Y')
                ->sortable()
                ->badge()
                ->color('success'),

            TextColumn::make('faculties.name.en')
                ->label('Facilitators')
                ->badge()
                ->separator(',')
                ->limitList(3)
                ->expandableLimitedList(),

            TextColumn::make('fee_type')
                ->label('Fee Type')
                ->badge()
                ->formatStateUsing(fn ($state) => match ($state) {
                    'residential' => 'Residential',
                    'simple' => 'Simple',
                    default => $state,
                })
                ->color(fn ($state) => match ($state) {
                    'residential' => 'warning',
                    'simple' => 'info',
                    default => 'gray',
                }),

            \Filament\Tables\Columns\IconColumn::make('registration_link')
                ->label('Registration')
                ->boolean()
                ->getStateUsing(fn ($record) => filled($record->registration_link)),

            TextColumn::make('created_at')
                ->label('Created')
                ->since()
                ->toggleable(isToggledHiddenByDefault: true),

        ])
        ->defaultSort('programme_date', 'desc')

        ->actions([
            \Filament\Actions\ViewAction::make(),
            \Filament\Actions\EditAction::make(),
        ])

        ->bulkActions([
            \Filament\Actions\BulkActionGroup::make([
                \Filament\Actions\DeleteBulkAction::make(),
            ]),
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
            'index' => ListProgrammeCalendars::route('/'),
            'create' => CreateProgrammeCalendar::route('/create'),
            'edit' => EditProgrammeCalendar::route('/{record}/edit'),
        ];
    }
    public static function mutateFormDataBeforeCreate(array $data): array
    {
        unset($data['faculties']);

        return $data;
    }

    public static function mutateFormDataBeforeSave(array $data): array
    {
        unset($data['faculties']);

        return $data;
    }
}

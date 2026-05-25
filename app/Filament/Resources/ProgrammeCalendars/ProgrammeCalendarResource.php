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

use Filament\Actions\Action;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ProgrammeCalendarImport;

class ProgrammeCalendarResource extends Resource
{
    protected static ?string $model = ProgrammeCalendar::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        // return ProgrammeCalendarForm::configure($schema);
        return $schema->schema([

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

            TextInput::make('programme_title')
                ->required()
                ->maxLength(255),

            // Faculties (from existing table)
            Select::make('faculties')
                ->label('Facilitators')
                ->multiple()
                ->options(
                    Faculty::all()->mapWithKeys(function ($faculty) {
                        return [
                            $faculty->id => $faculty->name['en'] ?? $faculty->name['hi'] ?? 'N/A',
                        ];
                    })
                )
                ->searchable()
                ->preload()
                ->dehydrated(false)

                // IMPORTANT FIX
                ->afterStateHydrated(function ($component, $record) {

                    if ($record) {

                        $component->state(
                            $record->faculties->pluck('id')->toArray()
                        );
                    }
                }),

            DatePicker::make('programme_date'),

            TextInput::make('venue'),

            TextInput::make('registration_link')
                ->url(),

            FileUpload::make('brochure_pdf')
                ->directory('programme-calendars')
                ->acceptedFileTypes(['application/pdf'])
                ->downloadable()
                ->openable(),

            // ⭐ Fee Type
            Select::make('fee_type')
                ->options([
                    'residential' => 'Residential / Non-Residential',
                    'simple' => 'Simple Fee',
                ])
                ->reactive()
                ->required(),

            // ⭐ Residential Fee
            TextInput::make('fee.residential_fee')
                ->label('Residential Fee')
                ->numeric()
                ->visible(fn($get) => $get('fee_type') === 'residential'),

            TextInput::make('fee.non_residential_fee')
                ->label('Non-Residential Fee')
                ->numeric()
                ->visible(fn($get) => $get('fee_type') === 'residential'),

            // ⭐ Simple Fee
            TextInput::make('fee.fee')
                ->label('Programme Fee')
                ->numeric()
                ->visible(fn($get) => $get('fee_type') === 'simple'),

            Toggle::make('fee.gst_applicable')
                ->label('GST Applicable'),

        ]);
    }

    public static function table(Table $table): Table
    {
        // return ProgrammeCalendarsTable::configure($table);
        return $table->columns([

            TextColumn::make('calendar_type'),

            TextColumn::make('academic_year'),

            TextColumn::make('programme_title')
                ->searchable(),

            TextColumn::make('programme_date')
                ->date(),

            TextColumn::make('venue'),

            TextColumn::make('fee_type'),

        ])->headerActions([
            Action::make('download_sample')

                ->label('Download Sample CSV')

                ->icon('heroicon-o-arrow-down-tray')

                ->url(asset('samples/programme-calendar-sample.csv'))

                ->openUrlInNewTab(),

            Action::make('import_csv')

                ->label('Import CSV')

                ->form([

                    FileUpload::make('csv_file')
                        ->acceptedFileTypes([
                            'text/csv',
                            'application/vnd.ms-excel',
                            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
                        ])
                        ->required(),

                ])

                ->action(function (array $data) {

                    Excel::import(
                        new ProgrammeCalendarImport,
                        storage_path('app/public/' . $data['csv_file'])
                    );
                }),

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

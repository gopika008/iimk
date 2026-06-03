<?php

namespace App\Filament\Resources\StudentDirectories;

use App\Filament\Resources\StudentDirectories\Pages\CreateStudentDirectory;
use App\Filament\Resources\StudentDirectories\Pages\EditStudentDirectory;
use App\Filament\Resources\StudentDirectories\Pages\ListStudentDirectories;
use App\Models\Batch;
use App\Models\StudentDirectory;

use BackedEnum;

use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

use Filament\Actions\Action;

use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Toggle;
use App\Filament\Resources\StudentDirectories\Schemas\StudentDirectoryForm;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\ToggleButtons;
use Filament\Tables\Columns\ImageColumn;

use Filament\Notifications\Notification;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\StudentDirectoryImport;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Illuminate\Database\Eloquent\Builder;
use Stichoza\GoogleTranslate\GoogleTranslate;



class StudentDirectoryResource extends Resource
{
    protected static ?string $model = StudentDirectory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUsers;
    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([

                Section::make('Student Information')
                    ->description('Basic details of student')
                    ->schema([



Select::make('programme_id')
    ->label('Programme')
    ->options(\App\Models\Programme::pluck('name', 'id'))
    ->searchable()
    ->preload()
    ->live()
    ->required()
    ->afterStateUpdated(fn (callable $set) => $set('batch_id', null))

    ->suffixAction(
        Action::make('generateBatches')
            ->icon('heroicon-m-arrow-path')
            ->label('Generate')
            ->action(function ($get) {

                $programmeId = $get('programme_id');

                if (! $programmeId) {
                    Notification::make()
                        ->title('Please select a programme first')
                        ->warning()
                        ->send();

                    return;
                }

                $config = [
                    12 => ['code' => 'PhD(PT)', 'batch' => 1, 'start' => 2019, 'end' => 2020],
                    1  => ['code' => 'DPM', 'batch' => 1, 'start' => 2007, 'end' => 2010],
                    2  => ['code' => 'PGP', 'batch' => 6, 'start' => 2002, 'end' => 2004],
                    3  => ['code' => 'PGPF', 'batch' => 1, 'start' => 2020, 'end' => 2022],
                    4  => ['code' => 'PGPLSM', 'batch' => 1, 'start' => 2020, 'end' => 2022],
                    5  => ['code' => 'PGPBL', 'batch' => 1, 'start' => 2019, 'end' => 2021],
                    6  => ['code' => 'BMS', 'batch' => 1, 'start' => 2025, 'end' => 2028],
                    7  => ['code' => 'EPGP', 'batch' => 1, 'start' => 2008, 'end' => 2010],
                    8  => ['code' => 'EPGPKC', 'batch' => 1, 'start' => 2013, 'end' => 2015],
                ];

                if (! isset($config[$programmeId])) {
                    return;
                }

                $p = $config[$programmeId];

                $duration = $p['end'] - $p['start'];

                $batchNo = $p['batch'];
                $startYear = $p['start'];

                while ($startYear <= now()->year) {

                    \App\Models\Batch::firstOrCreate(
                        [
                            'programme_id' => $programmeId,
                            'name' => $p['code'] . ' ' . str_pad($batchNo, 2, '0', STR_PAD_LEFT).' '. ($startYear . '-' . ($startYear + $duration)),
                        ],
                        [
                            'start_year' => $startYear,
                            'end_year' => $startYear + $duration,
                        ]
                    );

                    $batchNo++;
                    $startYear++;
                }

                Notification::make()
                    ->title('Batches generated successfully')
                    ->success()
                    ->send();
            })
    ),

Select::make('batch_id')
    ->label('Batch')
    ->options(fn ($get) =>
        \App\Models\Batch::query()
            ->where('programme_id', $get('programme_id'))
            ->orderByDesc('start_year')
            ->get()
            ->mapWithKeys(fn ($batch) => [
                $batch->id =>
                    "{$batch->name}"
            ])
    )
    ->searchable()
    ->preload()
    ->live()
    ->required()
    ->disabled(fn ($get) => blank($get('programme_id'))),
                        TextInput::make('email')
                            ->email()
                            ->unique(ignoreRecord: true)
                            ->validationMessages([
                                'unique' => 'This email already exists.',
                            ])
                            ->required()
                            ->columnSpanFull(),

                        Section::make('English Content')
                            ->schema([

                                TextInput::make('name.en')
                                    ->label('Name (English)')
                                    ->required()
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(
                                        fn($state, callable $set) =>
                                        filled($state)
                                            ? $set('name.hi', GoogleTranslate::trans($state, 'hi', 'en'))
                                            : null
                                    ),

                                TextInput::make('last_qualification.en')
                                    ->label('Last Qualification (English)')
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(
                                        fn($state, callable $set) =>
                                        filled($state)
                                            ? $set('last_qualification.hi', GoogleTranslate::trans($state, 'hi', 'en'))
                                            : null
                                    ),

                                TextInput::make('institution.en')
                                    ->label('College / Institution (English)')
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(
                                        fn($state, callable $set) =>
                                        filled($state)
                                            ? $set('institution.hi', GoogleTranslate::trans($state, 'hi', 'en'))
                                            : null
                                    ),

                                TextInput::make('designation.en')
                                    ->label('Designation (English)')
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(
                                        fn($state, callable $set) =>
                                        filled($state)
                                            ? $set('designation.hi', GoogleTranslate::trans($state, 'hi', 'en'))
                                            : null
                                    ),

                                TextInput::make('current_organization.en')
                                    ->label('Organization (English)')
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(
                                        fn($state, callable $set) =>
                                        filled($state)
                                            ? $set('current_organization.hi', GoogleTranslate::trans($state, 'hi', 'en'))
                                            : null
                                    ),

                            ])
                            ->columns(2)
                            ->columnSpan(1),

                        Section::make('Hindi Content')
                            ->schema([

                                TextInput::make('name.hi')
                                    ->label('Name (Hindi)')
                                    ->required(),

                                TextInput::make('last_qualification.hi')
                                    ->label('Last Qualification (Hindi)'),

                                TextInput::make('institution.hi')
                                    ->label('College / Institution (Hindi)'),

                                TextInput::make('designation.hi')
                                    ->label('Designation (Hindi)'),

                                TextInput::make('current_organization.hi')
                                    ->label('Organization (Hindi)'),

                            ])
                            ->columns(2)
                            ->columnSpan(1),

                    ])
                    ->columns(2),

                Section::make('Profile Photo')
                    ->schema([

                        FileUpload::make('photo')
                            ->image()
                            ->disk('public')
                            ->directory('student-directory')
                            ->imagePreviewHeight('180')
                            ->panelLayout('integrated')
                            ->columnSpanFull(),

                    ]),

            ])
            ->columns(1);
        // return StudentDirectoryForm::configure($schema);
        // return $schema
        //     ->schema([

        //         Tabs::make('Student Directory')

        //             ->tabs([

        //                 /*
        //     |--------------------------------------------------------------------------
        //     | PERSONAL TAB
        //     |--------------------------------------------------------------------------
        //     */

        //                 Tab::make('Personal')

        //                     ->icon('heroicon-o-user')

        //                     ->schema([

        //                         Section::make('Personal Details')

        //                             ->schema([

        //                                 TextInput::make('chrStudFirstName'),

        //                                 TextInput::make('chrStudMiddleName'),

        //                                 TextInput::make('chrStudLastName'),

        //                                 DatePicker::make('dtmDOB'),

        //                                 TextInput::make('chrSex'),

        //                                 TextInput::make('chrMaritalStatus'),

        //                                 TextInput::make('intBloodGroup'),

        //                                 TextInput::make('intNationalityCode'),

        //                                 TextInput::make('chrBirthPlace'),

        //                                 TextInput::make('chrReligion'),

        //                                 TextInput::make('chrCommunity'),

        //                                 TextInput::make('chrMotherTounge'),

        //                             ])

        //                             ->columns(4),

        //                     ]),

        //                 /*
        //     |--------------------------------------------------------------------------
        //     | CONTACT TAB
        //     |--------------------------------------------------------------------------
        //     */

        //                 Tab::make('Contact')

        //                     ->icon('heroicon-o-phone')

        //                     ->schema([

        //                         Section::make('Contact Details')

        //                             ->schema([

        //                                 TextInput::make('chrPhone'),

        //                                 TextInput::make('chrMobile'),

        //                                 TextInput::make('chrEmail'),

        //                                 TextInput::make('chrAltEmail'),

        //                                 TextInput::make('chrFacebookID'),

        //                                 TextInput::make('chrWatsappNo'),

        //                                 TextInput::make('chrFax'),

        //                             ])

        //                             ->columns(3),

        //                     ]),

        //                 /*
        //     |--------------------------------------------------------------------------
        //     | ADMISSION TAB
        //     |--------------------------------------------------------------------------
        //     */

        //                 Tab::make('Admission')

        //                     ->icon('heroicon-o-academic-cap')

        //                     ->schema([

        //                         Section::make('Admission Details')

        //                             ->schema([

        //                                 TextInput::make('intSchAutoNo'),

        //                                 TextInput::make('intRankNo'),

        //                                 TextInput::make('intAppID'),

        //                                 TextInput::make('intSpecializationID'),

        //                                 TextInput::make('intUniversityCode'),

        //                                 TextInput::make('intRollNo'),

        //                                 TextInput::make('chrAdmNumber'),

        //                                 TextInput::make('intAdmNumber'),

        //                                 TextInput::make('chrStudentID'),

        //                                 TextInput::make('intBatchID'),

        //                                 TextInput::make('intCourseID'),

        //                                 TextInput::make('intCourseCategory'),

        //                                 TextInput::make('intCourseDivID'),

        //                                 TextInput::make('intCourseReservID'),

        //                                 TextInput::make('intSemID'),

        //                                 TextInput::make('intUniversityID'),

        //                                 TextInput::make('intElectSubjID'),

        //                                 TextInput::make('intReservID'),

        //                                 TextInput::make('intReservNo'),

        //                                 TextInput::make('intDestinationID'),

        //                                 TextInput::make('chrAdmissionType'),

        //                                 TextInput::make('chrSeatType'),

        //                                 DateTimePicker::make('dtmAdmission'),

        //                             ])

        //                             ->columns(4),

        //                     ]),

        //                 /*
        //     |--------------------------------------------------------------------------
        //     | ADDRESS TAB
        //     |--------------------------------------------------------------------------
        //     */

        //                 Tab::make('Address')

        //                     ->icon('heroicon-o-map-pin')

        //                     ->schema([

        //                         Section::make('Communication Address')

        //                             ->schema([

        //                                 Textarea::make('chrCommAddress1'),

        //                                 Textarea::make('chrCommAddress2'),

        //                                 TextInput::make('intCityCode1'),

        //                                 TextInput::make('intDistrictCode1'),

        //                                 TextInput::make('intStateCode1'),

        //                                 TextInput::make('intZipCode1'),

        //                                 TextInput::make('intCountryCode1'),

        //                             ])

        //                             ->columns(2),

        //                         Section::make('Permanent Address')

        //                             ->schema([

        //                                 Textarea::make('chrPermanentAddress1'),

        //                                 Textarea::make('chrPermanentAddress2'),

        //                                 TextInput::make('intCityCode2'),

        //                                 TextInput::make('intDistrictCode2'),

        //                                 TextInput::make('intStateCode2'),

        //                                 TextInput::make('intZipCode2'),

        //                                 TextInput::make('intCountryCode2'),

        //                                 Toggle::make('isAddressSame'),

        //                             ])

        //                             ->columns(2),

        //                     ]),

        //                 /*
        //     |--------------------------------------------------------------------------
        //     | DOCUMENTS TAB
        //     |--------------------------------------------------------------------------
        //     */

        //                 Tab::make('Documents')

        //                     ->icon('heroicon-o-document')

        //                     ->schema([

        //                         Section::make('Documents')

        //                             ->schema([

        //                                 FileUpload::make('chrPhotoImageName'),

        //                                 FileUpload::make('chrSignImage'),

        //                                 FileUpload::make('chrAdharFile'),

        //                                 FileUpload::make('chrUpload'),

        //                                 TextInput::make('chrPassportNo'),

        //                                 TextInput::make('chrPanCardNumber'),

        //                                 TextInput::make('chrAdharNo'),

        //                                 Textarea::make('txtIdentification')
        //                                     ->columnSpanFull(),

        //                             ])

        //                             ->columns(3),

        //                     ]),

        //                 /*
        //     |--------------------------------------------------------------------------
        //     | LOGIN TAB
        //     |--------------------------------------------------------------------------
        //     */

        //                 Tab::make('Login')

        //                     ->icon('heroicon-o-lock-closed')

        //                     ->schema([

        //                         Section::make('Login Details')

        //                             ->schema([

        //                                 TextInput::make('chrUsername'),

        //                                 TextInput::make('chrPassword'),

        //                                 TextInput::make('chrOTP'),

        //                                 DateTimePicker::make('dtmPasswdUpdate'),

        //                             ])

        //                             ->columns(2),

        //                     ]),

        //                 /*
        //     |--------------------------------------------------------------------------
        //     | FACILITIES TAB
        //     |--------------------------------------------------------------------------
        //     */

        //                 Tab::make('Facilities')

        //                     ->icon('heroicon-o-building-office')

        //                     ->schema([

        //                         Section::make('Facilities')

        //                             ->schema([

        //                                 TextInput::make('chrHostelFacility'),

        //                                 TextInput::make('chrTransportFacility'),

        //                                 TextInput::make('chrAllowInst'),

        //                                 TextInput::make('numInstallments'),

        //                             ])

        //                             ->columns(2),

        //                     ]),

        //                 /*
        //     |--------------------------------------------------------------------------
        //     | ACTIVITIES TAB
        //     |--------------------------------------------------------------------------
        //     */

        //                 Tab::make('Activities')

        //                     ->icon('heroicon-o-star')

        //                     ->schema([

        //                         Section::make('Activities & Talents')

        //                             ->schema([

        //                                 TextInput::make('chrSports'),

        //                                 TextInput::make('chrNCC'),

        //                                 TextInput::make('chrNSS'),

        //                                 TextInput::make('chrActivityCheck'),

        //                                 Textarea::make('chrActivityDetails'),

        //                                 TextInput::make('chrAcheiveCheck'),

        //                                 Textarea::make('chrAcheiveDetails'),

        //                                 TextInput::make('chrArtsSportsCheck'),

        //                                 Textarea::make('chrArtsSportsDetails'),

        //                                 TextInput::make('chrTalentCheck'),

        //                                 Textarea::make('chrTalentDetails'),

        //                             ])

        //                             ->columns(2),

        //                     ]),

        //                 /*
        //     |--------------------------------------------------------------------------
        //     | EMPLOYMENT TAB
        //     |--------------------------------------------------------------------------
        //     */

        //                 Tab::make('Employment')

        //                     ->icon('heroicon-o-briefcase')

        //                     ->schema([

        //                         Section::make('Employment Details')

        //                             ->schema([

        //                                 TextInput::make('chrPrevEmployer'),

        //                                 TextInput::make('chrCurrentOrganozation'),

        //                                 TextInput::make('chrCurrentDesignation'),

        //                                 Textarea::make('student_description')
        //                                     ->columnSpanFull(),

        //                             ])

        //                             ->columns(3),

        //                     ]),

        //                 /*
        //     |--------------------------------------------------------------------------
        //     | STATUS TAB
        //     |--------------------------------------------------------------------------
        //     */

        //                 Tab::make('Status')

        //                     ->icon('heroicon-o-information-circle')

        //                     ->schema([

        //                         Section::make('Status Details')

        //                             ->schema([

        //                                 TextInput::make('chrTCIssued'),

        //                                 TextInput::make('chrGraduated'),

        //                                 TextInput::make('chrAlumni'),

        //                                 TextInput::make('chrLoan'),

        //                                 TextInput::make('chrBank'),

        //                                 TextInput::make('chrOptionNeed'),

        //                                 TextInput::make('chrRemarks'),

        //                                 TextInput::make('chrExService'),

        //                             ])

        //                             ->columns(4),

        //                     ]),

        //                 /*
        //     |--------------------------------------------------------------------------
        //     | SYSTEM TAB
        //     |--------------------------------------------------------------------------
        //     */

        //                 Tab::make('System')

        //                     ->icon('heroicon-o-cog-6-tooth')

        //                     ->schema([

        //                         Section::make('System Details')

        //                             ->schema([

        //                                 TextInput::make('intAutoNo')
        //                                     ->disabled(),

        //                                 TextInput::make('intUserID'),

        //                                 DateTimePicker::make('dtmEntry'),

        //                                 DateTimePicker::make('dtmUpdateTime'),

        //                             ])

        //                             ->columns(2),

        //                     ]),

        //             ])

        //             ->columnSpanFull()

        //     ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                ImageColumn::make('photo')
                    ->disk('public')
                    ->circular(),

                TextColumn::make('roll_no')
                    ->searchable(),

                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('programme.name')
                    ->label('Programme')
                    ->searchable(),

                // TextColumn::make('programme.name')
                //     ->label('Programme')
                //     ->formatStateUsing(
                //         fn($record) =>
                //         $record->programme?->name
                //     )
                //     ->searchable(),

                TextColumn::make('batch.name')
                    ->label('Batch')
                    ->searchable(),

                TextColumn::make('email'),

                TextColumn::make('designation'),

                TextColumn::make('current_organization')
                    ->label('Organization'),

            ])

        ->actions([
            \Filament\Actions\ViewAction::make(),
            \Filament\Actions\EditAction::make(),
            \Filament\Actions\DeleteAction::make(),
        ])
        ->bulkActions([
            \Filament\Actions\BulkActionGroup::make([
                \Filament\Actions\DeleteBulkAction::make(),
            ]),
        ])
        ->striped()
            // ->actions([

            //     \Filament\Actions\ViewAction::make(),

            //     \Filament\Actions\EditAction::make(),

            //     \Filament\Actions\DeleteAction::make(),

            // ])

            ->headerActions([
                Action::make('download_sample')

                    ->label('Download Sample CSV')

                    ->icon('heroicon-o-arrow-down-tray')

                    ->url(asset('samples/student-directory.csv'))

                    ->openUrlInNewTab(),

                Action::make('import_csv')
                    ->label('Import CSV')
                    ->icon('heroicon-o-arrow-up-tray')

                    ->form([

                        FileUpload::make('csv_file')
                            ->acceptedFileTypes([
                                'text/csv',
                                'application/vnd.ms-excel',
                            ])
                            ->required(),

                    ])

                    ->action(function (array $data) {

                        Excel::import(
                            new StudentDirectoryImport,
                            storage_path('app/public/' . $data['csv_file'])
                        );

                        Notification::make()
                            ->title('CSV Imported Successfully')
                            ->success()
                            ->send();
                    }),

            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [

            'index' => ListStudentDirectories::route('/'),

            'create' => CreateStudentDirectory::route('/create'),

            'edit' => EditStudentDirectory::route('/{record}/edit'),

        ];
    }
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->with(['programme', 'batch']);
    }
    public function getMaxContentWidth(): ?string
    {
        return 'full';
    }
}


/*



















*/

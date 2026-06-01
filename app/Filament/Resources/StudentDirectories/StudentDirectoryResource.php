<?php

namespace App\Filament\Resources\StudentDirectories;

use App\Filament\Resources\StudentDirectories\Pages\CreateStudentDirectory;
use App\Filament\Resources\StudentDirectories\Pages\EditStudentDirectory;
use App\Filament\Resources\StudentDirectories\Pages\ListStudentDirectories;
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
                            ->required(),

                        Select::make('batch_id')
                            ->label('Batch')
                            ->options(
                                fn($get) =>
                                \App\Models\Batch::where(
                                    'programme_id',
                                    $get('programme_id')
                                )->pluck('name', 'id')
                            )
                            ->searchable()
                            ->required(),

                        TextInput::make('name')
                            ->required(),

                        TextInput::make('email')
                            ->email()
                            ->unique(ignoreRecord: true)
                            ->validationMessages([
                                'unique' => 'This email already exists.',
                            ])
                            ->required(),

                    ])
                    ->columns(2),

                Section::make('Academic & Professional Details')
                    ->schema([

                        TextInput::make('last_qualification')
                            ->label('Last Qualification'),

                        TextInput::make('institution')
                            ->label('College / Institution'),

                        TextInput::make('designation'),

                        TextInput::make('current_organization')
                            ->label('Organization'),

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

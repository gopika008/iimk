<?php

namespace App\Filament\Resources\Faculties;

use App\Filament\Resources\Faculties\Pages\CreateFaculty;
use App\Filament\Resources\Faculties\Pages\EditFaculty;
use App\Filament\Resources\Faculties\Pages\ListFaculties;
use App\Filament\Resources\Faculties\Schemas\FacultyForm;
use App\Filament\Resources\Faculties\Tables\FacultiesTable;
use App\Filament\Resources\Faculties\RelationManagers\FacultyContentRelationManager;
use App\Models\Faculty;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use App\Models\Section;
use Filament\Tables\Columns\{
    TextColumn,
    ImageColumn
};
use Filament\Actions\EditAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\BulkActionGroup;
use Filament\Forms\Components\{
    TextInput,
    FileUpload,
    RichEditor,
    Repeater,
    Select
};
use UnitEnum;


class FacultyResource extends Resource
{
    protected static ?string $model = Faculty::class;
    protected static ?string $navigationLabel = 'Faculty Profiles';
    protected static string|UnitEnum|null $navigationGroup = 'Faculty Management';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static ?int $navigationSort = 1;
    // protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([

            Select::make('user_id')
                ->relationship('user', 'name')
                ->searchable()
                ->label('Faculty Login')
                ->hidden(fn() => auth()->user()->hasRole('faculty')),

            Tabs::make('Languages')
                ->tabs([

                    Tab::make('English')
                        ->schema([

                            TextInput::make('name.en')
                                ->label('Name')
                                ->required(),

                            TextInput::make('designation.en')
                                ->label('Designation'),

                            TextInput::make('area.en')
                                ->label('Area'),
                            TextInput::make('office.en')
                                ->label('Office'),
                            TextInput::make('highest_education.en')
                                ->label('Highest Education'),

                            RichEditor::make('qualification.en')
                                ->label('Highest Education Details')
                                ->columnSpanFull()
                                ->toolbarButtons([
                                    'bold',
                                    'italic',
                                    'underline',
                                    'strike',
                                    'subscript',
                                    'superscript',
                                    'link',
                                    'undo',
                                    'redo',
                                ]),
                            RichEditor::make('experience.en')
                                ->label('Experience Summary')
                                ->columnSpanFull()
                                ->toolbarButtons([
                                    'bold',
                                    'italic',
                                    'underline',
                                    'strike',
                                    'subscript',
                                    'superscript',
                                    'link',
                                    'undo',
                                    'redo',
                                ]),
                            RichEditor::make('profile.en')
                                ->label('Profile Highlights')
                                ->columnSpanFull()
                                ->toolbarButtons([
                                    'bold',
                                    'italic',
                                    'underline',
                                    'strike',
                                    'subscript',
                                    'superscript',
                                    'link',
                                    'undo',
                                    'redo',
                                ]),
                        ]),

                    Tab::make('Hindi')
                        ->schema([

                            TextInput::make('name.hi')
                                ->label('नाम'),

                            TextInput::make('designation.hi')
                                ->label('पद'),
                            TextInput::make('area.hi')
                                ->label('क्षेत्र'),

                            TextInput::make('office.hi')
                                ->label('कार्यालय'),


                            TextInput::make('highest_education.hi')
                                ->label('उच्चतम शिक्षा'),

                            RichEditor::make('qualification.hi')
                                ->label('उच्चतम शिक्षा विवरण')
                                ->columnSpanFull()
                                ->toolbarButtons([
                                    'bold',
                                    'italic',
                                    'underline',
                                    'strike',
                                    'subscript',
                                    'superscript',
                                    'link',
                                    'undo',
                                    'redo',
                                ]),
                            RichEditor::make('experience.hi')
                                ->label('अनुभव सारांश')
                                ->columnSpanFull()
                                ->toolbarButtons([
                                    'bold',
                                    'italic',
                                    'underline',
                                    'strike',
                                    'subscript',
                                    'superscript',
                                    'link',
                                    'undo',
                                    'redo',
                                ]),
                            RichEditor::make('profile.hi')
                                ->label('प्रोफ़ाइल हाइलाइट्स')
                                ->columnSpanFull()
                                ->toolbarButtons([
                                    'bold',
                                    'italic',
                                    'underline',
                                    'strike',
                                    'subscript',
                                    'superscript',
                                    'link',
                                    'undo',
                                    'redo',
                                ]),
                        ]),
                ])
                ->columnSpanFull(),

            TextInput::make('phone'),

            TextInput::make('email')
                ->email(),

            TextInput::make('profile_url')
                ->url(),

            FileUpload::make('photo')
                ->disk('public')
                ->directory('faculty'),

        ]);
    }
    public static function getRecordTitle(?\Illuminate\Database\Eloquent\Model $record): string|null
    {
        return $record?->name['en'] ?? null;
    }
    public static function table(Table $table): Table
    {
        //return FacultiesTable::configure($table);
        return $table
            ->columns([

                ImageColumn::make('photo')
                    ->label('Photo')
                    ->disk('public')
                    ->circular(),

                TextColumn::make('name')
                    ->label('Name')
                    ->getStateUsing(
                        fn($record) => ($record->name['en'] ?? '') .
                            ' / ' .
                            ($record->name['hi'] ?? '')
                    )
                    ->searchable()
                    ->sortable(),

                TextColumn::make('designation')
                    ->label('Designation')
                    ->getStateUsing(
                        fn($record) => ($record->designation['en'] ?? '') .
                            ' / ' .
                            ($record->designation['hi'] ?? '')
                    )
                    ->wrap(),

                TextColumn::make('office')
                    ->label('Office')
                    ->getStateUsing(
                        fn($record) => ($record->office['en'] ?? '') .
                            ' / ' .
                            ($record->office['hi'] ?? '')
                    )
                    ->wrap(),

                TextColumn::make('area')
                    ->label('Area')
                    ->getStateUsing(
                        fn($record) => ($record->area['en'] ?? '') .
                            ' / ' .
                            ($record->area['hi'] ?? '')
                    )
                    ->wrap(),

                TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->copyable(),

                TextColumn::make('phone')
                    ->label('Phone')
                    ->searchable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
            ])

            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);


        // return $table
        // ->columns([

        //     ImageColumn::make('photo')
        //         ->disk('public'),

        //    TextColumn::make('name.en')
        //         ->label('Name')
        //         ->searchable()
        //         ->sortable(),

        //     TextColumn::make('designation.en')
        //         ->label('Designation'),

        //     TextColumn::make('department.en')
        //         ->label('Department'),

        //     TextColumn::make('area.en')
        //         ->label('Area'),

        //     TextColumn::make('email')
        //         ->searchable(),

        //     TextColumn::make('phone'),

        // ]);
    }


    public static function getRelations(): array
    {
        return [
            FacultyContentRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListFaculties::route('/'),
            'create' => CreateFaculty::route('/create'),
            'edit' => EditFaculty::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources\StudentAchievements;

use App\Filament\Resources\StudentAchievements\Pages\CreateStudentAchievement;
use App\Filament\Resources\StudentAchievements\Pages\EditStudentAchievement;
use App\Filament\Resources\StudentAchievements\Pages\ListStudentAchievements;
use App\Filament\Resources\StudentAchievements\Schemas\StudentAchievementForm;
use App\Filament\Resources\StudentAchievements\Tables\StudentAchievementsTable;
use App\Models\StudentAchievement;
use BackedEnum;
use Dom\Text;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;
use UnitEnum;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;

class StudentAchievementResource extends Resource
{
    protected static ?string $model = StudentAchievement::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static string|UnitEnum|null $navigationGroup = 'Achievements';
    protected static ?string $navigationLabel = 'Student Achievements';
    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([


            Section::make('Student Achievement Details')
                ->description('Assign achievements to students')
                ->icon('heroicon-o-academic-cap')
                ->schema([

                    Select::make('programme_id')
                        ->label('Programme')
                        ->options(\App\Models\Programme::pluck('name', 'id'))
                        ->searchable()
                        ->preload()
                        ->live()
                        ->required()
                        ->afterStateUpdated(fn($set) => [
                            $set('batch_id', null),
                            $set('student_directory_id', null),
                            $set('achievement_id', null),
                        ]),

                    Select::make('batch_id')
                        ->label('Batch')
                        ->options(
                            fn($get) =>
                            \App\Models\Batch::where('programme_id', $get('programme_id'))
                                ->pluck('name', 'id')
                        )
                        ->searchable()
                        ->preload()
                        ->live()
                        ->required()
                        ->afterStateUpdated(fn($set) => $set('student_directory_id', null)),

                    Select::make('student_directory_id')
                        ->label('Student')
                        ->options(
                            fn($get) =>
                            \App\Models\StudentDirectory::where('programme_id', $get('programme_id'))
                                ->where('batch_id', $get('batch_id'))
                                ->orderBy('name')
                                ->pluck('name', 'id')
                        )
                        ->searchable()
                        ->preload()
                        ->required(),

                    Select::make('achievement_id')
                        ->label('Achievement')
                        ->options(
                            fn($get) =>
                            \App\Models\Achievement::where('programme_id', $get('programme_id'))
                                ->pluck('title', 'id')
                        )
                        ->searchable()
                        ->preload()
                        ->required(),
                    //achieved_on date can be auto-filled from achievement's achieved_on or can be manually entered
                    DatePicker::make('achieved_on')
                        ->label('Achieved On')
                        ->default(fn($get) => \App\Models\Achievement::where('id', $get('achievement_id'))->value('achieved_on'))
                        ->live(),


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
                ->label('Programme')
                ->searchable()
                ->sortable(),

            TextColumn::make('batch.name')
                ->label('Batch')
                ->searchable()
                ->sortable(),

            TextColumn::make('student.name')
                ->label('Student')
                ->searchable()
                ->sortable(),

            TextColumn::make('achievement.title')
                ->label('Achievement')
                ->searchable()
                ->sortable(),
            TextColumn::make('achieved_on')
                ->label('Achieved On')
                ->date('d M Y')
                ->sortable(),

            TextColumn::make('created_at')
                ->label('Created At')
                ->date('d M Y')
                ->sortable(),
        ])
        ->filters([
            SelectFilter::make('programme_id')
                ->relationship('programme', 'name'),

            SelectFilter::make('batch_id')
                ->relationship('batch', 'name'),

            SelectFilter::make('achievement_id')
                ->relationship('achievement', 'title'),
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
            ->striped();
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
            'index' => ListStudentAchievements::route('/'),
            'create' => CreateStudentAchievement::route('/create'),
            'edit' => EditStudentAchievement::route('/{record}/edit'),
        ];
    }
}

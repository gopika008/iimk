<?php

namespace App\Filament\Resources\Achievements;

use App\Filament\Resources\Achievements\Pages\CreateAchievement;
use App\Filament\Resources\Achievements\Pages\EditAchievement;
use App\Filament\Resources\Achievements\Pages\ListAchievements;
use App\Filament\Resources\Achievements\Schemas\AchievementForm;
use App\Filament\Resources\Achievements\Tables\AchievementsTable;
use App\Models\Achievement;
use BackedEnum;
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

class AchievementResource extends Resource
{
    protected static ?string $model = Achievement::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedTrophy;
    protected static string|UnitEnum|null $navigationGroup = 'Achievements';
    protected static ?string $navigationLabel = 'Achievements';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Section::make('Achievement Details')
                ->description('Manage student or general achievements')
                ->icon('heroicon-o-trophy')
                ->schema([

                    TextInput::make('title')
                        ->required()
                        ->maxLength(255),

                    Select::make('type')
                        ->options([
                            'award' => 'Award',
                            'certificate' => 'Certificate',
                            'competition' => 'Competition',
                            'academic' => 'Academic',
                            'other' => 'Other',
                        ])
                        ->required()
                        ->searchable(),

                    Select::make('programme_id')
                        ->label('Programme')
                        ->relationship('programme', 'name')
                        ->searchable()
                        ->preload()
                        ->required(),
                    DatePicker::make('achieved_on')
                        ->label('Date'),

                    Textarea::make('description')
                        ->rows(4)
                        ->columnSpanFull(),

                    // Toggle::make('is_featured')
                    //     ->label('Featured Achievement')
                    //     ->default(false),

                ])
                ->columns(2)
                ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('type')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'award' => 'success',
                        'certificate' => 'info',
                        'competition' => 'warning',
                        'academic' => 'primary',
                        default => 'gray',
                    }),

                TextColumn::make('programme.name')
                    ->label('Programme')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('achieved_on')
                    ->label('Date')
                    ->date()
                    ->sortable(),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => ListAchievements::route('/'),
            'create' => CreateAchievement::route('/create'),
            'edit' => EditAchievement::route('/{record}/edit'),
        ];
    }
}

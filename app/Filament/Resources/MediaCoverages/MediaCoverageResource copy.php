<?php

namespace App\Filament\Resources\MediaCoverages;

use App\Filament\Resources\MediaCoverages\Pages\CreateMediaCoverage;
use App\Filament\Resources\MediaCoverages\Pages\EditMediaCoverage;
use App\Filament\Resources\MediaCoverages\Pages\ListMediaCoverages;
use App\Filament\Resources\MediaCoverages\Schemas\MediaCoverageForm;
use App\Filament\Resources\MediaCoverages\Tables\MediaCoveragesTable;
use App\Models\MediaCoverage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;

use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Components\Section;
use Stichoza\GoogleTranslate\GoogleTranslate;

class MediaCoverageResource extends Resource
{
    protected static ?string $model = MediaCoverage::class;


    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedNewspaper;
    protected static ?string $navigationLabel = 'Media & Press';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([

            Section::make('Media Coverage')
                ->description('Manage press releases and media/news entries')
                ->schema([

                    Section::make('English Content')
                        ->schema([

                            TextInput::make('title.en')
                                ->label('Title (English)')
                                ->required()
                                ->maxLength(255)
                                ->live(onBlur: true)
                                ->afterStateUpdated(function ($state, callable $set) {
                                    if (filled($state)) {
                                        $set(
                                            'title.hi',
                                            GoogleTranslate::trans($state, 'hi', 'en')
                                        );
                                    }
                                }),

                            Textarea::make('description.en')
                                ->label('Description (English)')
                                ->rows(5)
                                ->live(onBlur: true)
                                ->afterStateUpdated(function ($state, callable $set) {
                                    if (filled($state)) {
                                        $set(
                                            'description.hi',
                                            GoogleTranslate::trans($state, 'hi', 'en')
                                        );
                                    }
                                }),

                            TextInput::make('paper.en')
                                ->label('Newspaper / Media Name (English)')
                                ->placeholder('The Hindu')
                                ->live(onBlur: true)
                                ->afterStateUpdated(function ($state, callable $set) {
                                    if (filled($state)) {
                                        $set(
                                            'paper.hi',
                                            GoogleTranslate::trans($state, 'hi', 'en')
                                        );
                                    }
                                }),

                        ])
                        ->columnSpan(1),

                    Section::make('Hindi Content')
                        ->schema([

                            TextInput::make('title.hi')
                                ->label('Title (Hindi)')
                                ->required()
                                ->maxLength(255),

                            Textarea::make('description.hi')
                                ->label('Description (Hindi)')
                                ->rows(5),

                            TextInput::make('paper.hi')
                                ->label('Newspaper / Media Name (Hindi)'),

                        ])
                        ->columnSpan(1),

                    TextInput::make('link')
                        ->label('Source Link')
                        ->url()
                        ->maxLength(255),

                    DatePicker::make('date')
                        ->label('Published Date')
                        ->required(),

                    Select::make('type')
                        ->label('Type')
                        ->options([
                            'in_media' => 'In Media',
                            'press_release' => 'Press Release',
                        ])
                        ->required(),

                    Toggle::make('status')
                        ->label('Active Status')
                        ->default(true),

                    FileUpload::make('image')
                        ->label('Image')
                        ->image()
                        ->directory('media-coverages')
                        ->moveFiles()
                        ->columnSpanFull(),

                ])
                ->columns(2)
                ->columnSpanFull(),

        ]);
    }

    public static function table(Table $table): Table
    {
    return $table
        ->columns([

            ImageColumn::make('image')
                ->label('Image')
                ->square()
                ->size(60),

            TextColumn::make('title')
                ->label('Title')
                ->formatStateUsing(
                    fn ($record) => $record->getTranslation('title', 'en')
                )
                ->description(
                    fn ($record) => $record->getTranslation('title', 'hi')
                )
                ->wrap()
                ->searchable()
                ->sortable(),

            TextColumn::make('paper')
                ->label('Media Name')
                ->formatStateUsing(
                    fn ($record) => $record->getTranslation('paper', 'en')
                )
                ->description(
                    fn ($record) => $record->getTranslation('paper', 'hi')
                )
                ->wrap()
                ->searchable(),

            TextColumn::make('type')
                ->badge()
                ->formatStateUsing(fn (string $state) => match ($state) {
                    'in_media' => 'In Media',
                    'press_release' => 'Press Release',
                    default => $state,
                })
                ->color(fn (string $state) => match ($state) {
                    'in_media' => 'info',
                    'press_release' => 'success',
                    default => 'gray',
                }),

            TextColumn::make('link')
                ->label('Source')
                ->url(fn ($record) => $record->link)
                ->openUrlInNewTab()
                ->limit(30)
                ->toggleable(),

            TextColumn::make('date')
                ->label('Published Date')
                ->date('d M Y')
                ->sortable(),

            IconColumn::make('status')
                ->label('Status')
                ->boolean(),

            TextColumn::make('created_at')
                ->label('Created')
                ->since()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),

            TextColumn::make('updated_at')
                ->label('Last Updated')
                ->since()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),

        ])
        ->filters([
            \Filament\Tables\Filters\SelectFilter::make('type')
                ->options([
                    'in_media' => 'In Media',
                    'press_release' => 'Press Release',
                ]),

            \Filament\Tables\Filters\SelectFilter::make('status')
                ->options([
                    1 => 'Active',
                    0 => 'Inactive',
                ]),
        ])
        ->defaultSort('date', 'desc')
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
            'index' => ListMediaCoverages::route('/'),
            'create' => CreateMediaCoverage::route('/create'),
            'edit' => EditMediaCoverage::route('/{record}/edit'),
        ];
    }
}

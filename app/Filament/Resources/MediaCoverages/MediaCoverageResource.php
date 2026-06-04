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

            TextInput::make('title')
                ->label('Title')
                ->required()
                ->maxLength(255)
                ->columnSpanFull(),

            Textarea::make('description')
                ->label('Description')
                ->rows(5)
                ->columnSpanFull(),

            TextInput::make('paper')
                ->label('Newspaper / Media Name')
                ->placeholder('Malayala Manorama'),

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

            FileUpload::make('image')
                ->label('Image')
                ->image()
                ->directory('media-coverages')
                ->moveFiles()
                ->columnSpanFull(),

            Toggle::make('status')
                ->label('Active Status')
                ->default(true),

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
    ->disk('public')
    ->square()
    ->size(80),


                TextColumn::make('title')
                    ->searchable()
                    ->limit(40),

                TextColumn::make('paper')
                    ->searchable(),

                TextColumn::make('type')
                    ->badge()
                    ->colors([
                        'success' => 'in_media',
                        'primary' => 'press_release',
                    ]),

                TextColumn::make('date')
                    ->date(),

                IconColumn::make('status')
                    ->boolean(),

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

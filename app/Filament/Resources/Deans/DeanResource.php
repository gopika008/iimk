<?php

namespace App\Filament\Resources\Deans;

use App\Models\Member;
use BackedEnum;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use Illuminate\Database\Eloquent\Builder;

use App\Filament\Clusters\Members\MembersCluster;

use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\RichEditor;
use App\Filament\Resources\Deans\Pages\ListDeans;
use App\Filament\Resources\Deans\Pages\CreateDean;
use App\Filament\Resources\Deans\Pages\EditDean;
use Filament\Schemas\Components\Section;
use Filament\Tables\Columns\IconColumn;
use function Laravel\Prompts\select;
use Filament\Forms\Components\Toggle;
class DeanResource extends Resource
{
    protected static ?string $model = Member::class;

    protected static ?string $cluster = MembersCluster::class;

    protected static ?string $navigationLabel = 'Deans';

    protected static string|BackedEnum|null $navigationIcon =
    Heroicon::OutlinedAcademicCap;

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->where('type_code', 'D&A');
    }

    public static function form(Schema $schema): Schema
    {
return $schema->schema([
     Section::make('Dean and Administration Details')
        ->description('Manage Dean and Administration member information')
        ->icon('heroicon-o-user-group')
        ->schema([

            TextInput::make('name')
                ->required(),

            TextInput::make('designation'),

            Select::make('role')
                ->options([
                    'DEAN (Faculty Administration & Development)' => 'DEAN (Faculty Administration & Development)',
                    'DEAN (Executive Education)' => 'DEAN (Executive Education)',
                    'DEAN (Programmes)' => 'DEAN (Programmes)',
                    'ASSOCIATE DEAN (Kochi Campus)' => 'ASSOCIATE DEAN (Kochi Campus)',
                    'Executive Chair - GLOBE' => 'Executive Chair - GLOBE',
                ])
                ->required(),

            Select::make('icon')
                ->label('Bootstrap Icon')
                ->options([
                    'bi-people' => 'People',
                    'bi-mortarboard' => 'Mortarboard',
                    'bi-person-badge' => 'Person Badge',
                    'bi-briefcase' => 'Briefcase',
                    'bi-building' => 'Building',
                    'bi-person-workspace' => 'Workspace',
                    'bi-award' => 'Award',
                    'bi-globe' => 'Globe',
                    'bi-book' => 'Book',
                    'bi-diagram-3' => 'Diagram',
                    'bi-journal-richtext' => 'Journal Richtext',
                ])
                ->searchable()
                ->required(),

            RichEditor::make('description')
                ->columnSpanFull(),

            FileUpload::make('image')
                ->image()
                ->disk('public')
                ->directory('members')
                ->visibility('public')
                ->imagePreviewHeight('150')
                ->openable()
                ->downloadable(),

            TextInput::make('url')
                ->url()
                ->prefix('https://'),

            TextInput::make('type')
                ->default('Deans And Administration')
                ->readonly(),
            Toggle::make('status')
                ->label('Active Status')
                ->default(true),

            Hidden::make('type_code')
                ->default('D&A'),

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
                    ->circular(),

                TextColumn::make('name')
                    ->searchable(),

                TextColumn::make('role'),

                TextColumn::make('designation'),
                TextColumn::make('type'),

                TextColumn::make('created_at')
                    ->dateTime(),
                IconColumn::make('status')
                    ->boolean()
                    ->label('Active'),
            ])
            ->actions([
                \Filament\Actions\EditAction::make(),
                \Filament\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListDeans::route('/'),
            'create' => CreateDean::route('/create'),
            'edit' => EditDean::route('/{record}/edit'),
        ];
    }
}

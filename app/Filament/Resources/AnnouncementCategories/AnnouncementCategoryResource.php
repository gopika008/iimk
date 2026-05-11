<?php

namespace App\Filament\Resources\AnnouncementCategories;

use App\Filament\Resources\AnnouncementCategories\Pages\CreateAnnouncementCategory;
use App\Filament\Resources\AnnouncementCategories\Pages\EditAnnouncementCategory;
use App\Filament\Resources\AnnouncementCategories\Pages\ListAnnouncementCategories;
use App\Filament\Resources\AnnouncementCategories\Schemas\AnnouncementCategoryForm;
use App\Filament\Resources\AnnouncementCategories\Tables\AnnouncementCategoriesTable;
use App\Models\AnnouncementCategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use UnitEnum;
class AnnouncementCategoryResource extends Resource
{
    protected static ?string $model = AnnouncementCategory::class;

    // protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentText;

    // protected static ?string $recordTitleAttribute = 'name';
    protected static ?string $navigationLabel = 'Categories';

protected static string|UnitEnum|null $navigationGroup = 'Announcement Management';


protected static ?int $navigationSort = 1;

protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedMegaphone;
    public static function form(Schema $schema): Schema
    {
        return $schema->components([

            TextInput::make('name')
                ->required()
                ->live(onBlur: true)
                ->afterStateUpdated(
                    fn($state, callable $set) =>
                    $set('slug', Str::slug($state))
                ),

            TextInput::make('slug')
                ->disabled()
                ->dehydrated(),

            TextInput::make('display_order')
                ->numeric()
                ->default(0),

            Toggle::make('status')
                ->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('name')->searchable(),
            TextColumn::make('slug'),
            TextColumn::make('display_order'),
            IconColumn::make('status')->boolean(),
        ])
            ->defaultSort('display_order');
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
            'index' => ListAnnouncementCategories::route('/'),
            'create' => CreateAnnouncementCategory::route('/create'),
            'edit' => EditAnnouncementCategory::route('/{record}/edit'),
        ];
    }
    // public static function canViewAny(): bool
    // {
    //     return auth()->user()->isAdmin();
    // }
}

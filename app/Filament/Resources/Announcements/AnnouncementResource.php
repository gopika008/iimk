<?php

namespace App\Filament\Resources\Announcements;

use App\Filament\Resources\Announcements\Pages\CreateAnnouncement;
use App\Filament\Resources\Announcements\Pages\EditAnnouncement;
use App\Filament\Resources\Announcements\Pages\ListAnnouncements;
use App\Filament\Resources\Announcements\Schemas\AnnouncementForm;
use App\Filament\Resources\Announcements\Tables\AnnouncementsTable;
use App\Models\Announcement;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Toggle;
use Illuminate\Support\Str;
use UnitEnum;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Components\Section;

class AnnouncementResource extends Resource
{
    protected static ?string $model = Announcement::class;
    // protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedMegaphone;

    // protected static ?string $recordTitleAttribute = 'name';
    protected static ?string $navigationLabel = 'Announcements';

    protected static string|UnitEnum|null $navigationGroup = 'Announcement Management';


    protected static ?int $navigationSort = 1;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedMegaphone;

    // public static function form(Schema $schema): Schema
    // {
    //     return AnnouncementForm::configure($schema);
    // }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->searchable(),

                Tables\Columns\TextColumn::make('category.name'),

                Tables\Columns\IconColumn::make('status')
                    ->boolean(),

                Tables\Columns\TextColumn::make('publish_date')->date(),
                Tables\Columns\TextColumn::make('expiry_date')->date(),

                Tables\Columns\TextColumn::make('display_order'),
            ])
            ->defaultSort('display_order')
            ->reorderable('display_order') // 🔥 THIS ENABLES DRAG & DROP
            ->actions([
                \Filament\Actions\EditAction::make(),
                \Filament\Actions\DeleteAction::make(),
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
            'index' => ListAnnouncements::route('/'),
            'create' => CreateAnnouncement::route('/create'),
            'edit' => EditAnnouncement::route('/{record}/edit'),
        ];
    }
    public static function form(Schema $schema): Schema
    {
        return $schema->schema([

            // 🔥 1. MULTI-LANGUAGE SECTION (ONLY TRANSLATIONS HERE)
            Tabs::make('Translations')
                ->columnSpanFull()
                ->tabs([

                    Tab::make('English')
                        ->schema([
                            TextInput::make('title.en')
                                ->label('Title (English)')
                                ->required()
                                ->live(onBlur: true)
                                ->afterStateUpdated(
                                    fn($state, callable $set) =>
                                    $set('slug', Str::slug($state))
                                ),

                            Textarea::make('short_description.en')
                                ->label('Short Description (English)')
                                ->columnSpanFull(),

                            TextInput::make('link_name.en')
                                ->label('Link Name (English)'),
                        ]),

                    Tab::make('Hindi')
                        ->schema([
                            TextInput::make('title.hi')
                                ->label('Title (Hindi)'),

                            Textarea::make('short_description.hi')
                                ->label('Short Description (Hindi)')
                                ->columnSpanFull(),

                            TextInput::make('link_name.hi')
                                ->label('Link Name (Hindi)'),
                        ]),
                ]),

            // 🔹 2. GENERAL INFORMATION SECTION
            Section::make('General Information')
                ->columnSpanFull()
                ->columns(2)
                ->schema([
                    TextInput::make('slug')
                        ->disabled()
                        ->dehydrated(),

                    Select::make('category_id')
                        ->relationship('category', 'name')
                        ->searchable()
                        ->preload(),

                    TextInput::make('link_url')
                        ->columnSpanFull(),
                    FileUpload::make('image')
                        ->image()
                        ->disk('public')
                        ->directory('announcements')
                        ->visibility('public')
                        ->imagePreviewHeight('150')
                        ->openable()
                        ->downloadable()
                        ->columnSpanFull(),
                    // FileUpload::make('image')
                    //     ->image()
                    //     ->disk('public')
                    //     ->directory('announcements')
                    //     ->imagePreviewHeight('150')
                    //     ->columnSpanFull(),
                ]),



            // 📅 4. PUBLISHING SETTINGS
            Section::make('Publishing Settings')
                ->columnSpanFull()
                ->columns(2)
                ->schema([
                    DatePicker::make('publish_date'),

                    DatePicker::make('expiry_date'),

                    Toggle::make('show_on_homepage')
                        ->default(false),

                    TextInput::make('display_order')
                        ->numeric()
                        ->default(0),

                    Toggle::make('status')
                        ->default(true),
                ]),
        ]);
    }
    // public static function getEloquentQuery(): \Illuminate\Database\Eloquent\Builder
    // {
    //     return parent::getEloquentQuery()->orderBy('display_order');
    // }
}

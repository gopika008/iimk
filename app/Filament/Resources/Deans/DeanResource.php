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

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\RichEditor;
use App\Filament\Resources\Deans\Pages\ListDeans;
use App\Filament\Resources\Deans\Pages\CreateDean;
use App\Filament\Resources\Deans\Pages\EditDean;

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

            TextInput::make('name')
                ->required(),

            TextInput::make('designation'),

            Hidden::make('type')
                ->default('Deans And Administration'),

            Hidden::make('type_code')
                ->default('D&A'),
            RichEditor::make('description')
                ->columnSpanFull(),    

            FileUpload::make('image')
                ->image()
                ->directory('members'),

            TextInput::make('url')
                ->url()
                ->prefix('https://'),
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

                TextColumn::make('designation'),
                TextColumn::make('type'),

                TextColumn::make('created_at')
                    ->dateTime(),
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
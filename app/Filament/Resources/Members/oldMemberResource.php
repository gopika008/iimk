<?php

namespace App\Filament\Resources\Members;

use App\Filament\Resources\Members\Pages\CreateMember;
use App\Filament\Resources\Members\Pages\EditMember;
use App\Filament\Resources\Members\Pages\ListMembers;
use App\Filament\Resources\Members\Schemas\MemberForm;
use App\Filament\Resources\Members\Tables\MembersTable;
use App\Models\Member;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Hidden;
use UnitEnum;
class MemberResource extends Resource
{
    // protected static ?string $model = Member::class;
    // protected static ?string $navigationLabel = 'Members';
    // protected static string|UnitEnum|null $navigationGroup = 'The Institute';

    // protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
protected static bool $shouldRegisterNavigation = false;
    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([

            TextInput::make('name')
                ->required()
                ->maxLength(255),

            TextInput::make('designation')
                ->maxLength(255),

            Select::make('type')
                ->options([
                    'Board of Governors' => 'Board of Governors',
                    'Deans And Administration' => 'Deans And Administration',
                ])
                ->live()
                ->afterStateUpdated(function ($state, callable $set) {

                    $map = [
                        'Board of Governors' => 'BOG',
                        'Deans And Administration' => 'D&A',
                    ];

                    $set('type_code', $map[$state] ?? null);
                })
                ->required(),

            Hidden::make('type_code'),

            FileUpload::make('image')
                ->image()
                ->directory('members')
                ->imagePreviewHeight('150')
                ->downloadable()
                ->openable(),

            TextInput::make('url')
                ->label('Profile URL')
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

                TextColumn::make('type')
                    ->badge(),

                TextColumn::make('created_at')
                    ->dateTime(),
            ])
            ->defaultSort('created_at', 'desc')
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
            'index' => ListMembers::route('/'),
            'create' => CreateMember::route('/create'),
            'edit' => EditMember::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources\Tenders;

use App\Filament\Resources\Tenders\Pages\CreateTender;
use App\Filament\Resources\Tenders\Pages\EditTender;
use App\Filament\Resources\Tenders\Pages\ListTenders;
use App\Filament\Resources\Tenders\Schemas\TenderForm;
use App\Filament\Resources\Tenders\Tables\TendersTable;
use App\Models\Tender;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Components\Section;
use Carbon\Carbon;

class TenderResource extends Resource
{
    protected static ?string $model = Tender::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedMegaphone;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([

            Section::make('Tender Details')
                ->description('Create and manage tender information')
                ->schema([

                    TextInput::make('title')
                        ->label('Tender Title')
                        ->required()
                        ->maxLength(255)
                        ->columnSpanFull(),
                    Select::make('type')
                        ->label('Tender Type')
                        ->options([
                            'normal' => 'Normal',
                            'etender' => 'E-Tender',
                        ])
                        ->required(),

                    TextInput::make('tender_no')
                        ->label('Tender Number')
                        ->required()
                        ->unique(ignoreRecord: true),

                    DateTimePicker::make('opening_date')
                        ->label('Opening Date')
                        ->required()
                        ->live()
                        ->afterStateUpdated(fn($state, $set) => $set('closing_date', null)),

                    DateTimePicker::make('closing_date')
                        ->label('Closing Date')
                        ->required()
                        ->minDate(fn($get) => $get('opening_date'))
                        ->afterOrEqual('opening_date'),



                    Toggle::make('collect_user_info')
                        ->label('Collect User Information')
                        ->default(false),

                    FileUpload::make('tender_document')
                        ->label('Tender Document (PDF)')
                        ->directory('tenders')
                        ->acceptedFileTypes(['application/pdf'])
                        ->downloadable()
                        ->openable()
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

                TextColumn::make('title')
                    ->searchable(),

                TextColumn::make('tender_no'),

                TextColumn::make('type')
                    ->badge(),


                TextColumn::make('opening_date')
                    ->label('Opening Date')
                    ->dateTime('d M Y, h:i A'),

                TextColumn::make('closing_date')
                    ->label('Closing Date')
                    ->dateTime('d M Y, h:i A'),

                TextColumn::make('status')
                    ->badge()
                    ->getStateUsing(
                        fn($record) =>
                        Carbon::parse($record->closing_date)->greaterThan(now())
                            ? 'Open'
                            : 'Closed'
                    )
                    ->colors([
                        'success' => 'Open',
                        'warning' => 'Closed',
                    ]),

                IconColumn::make('collect_user_info')
                    ->boolean(),

            ])->actions([
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
            'index' => ListTenders::route('/'),
            'create' => CreateTender::route('/create'),
            'edit' => EditTender::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources\AnnualReports;

use App\Filament\Resources\AnnualReports\Pages\CreateAnnualReport;
use App\Filament\Resources\AnnualReports\Pages\EditAnnualReport;
use App\Filament\Resources\AnnualReports\Pages\ListAnnualReports;
use App\Filament\Resources\AnnualReports\Schemas\AnnualReportForm;
use App\Filament\Resources\AnnualReports\Tables\AnnualReportsTable;
use App\Models\AnnualReport;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Forms\Components\{
    TextInput,
    FileUpload,
};
use Filament\Tables\Columns\TextColumn;
use UnitEnum;
class AnnualReportResource extends Resource
{
    protected static ?string $model = AnnualReport::class;
     protected static ?string $navigationLabel = 'Annual Reports';
    protected static string|UnitEnum|null $navigationGroup = 'The Institute';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([

            TextInput::make('year')
                ->numeric()
                ->required()
                ->maxLength(4),

            FileUpload::make('english_report')
                ->label('English Report')
                ->directory('annual-reports')
                ->acceptedFileTypes(['application/pdf'])
                ->downloadable()
                ->openable(),

            FileUpload::make('hindi_report')
                ->label('Hindi Report')
                ->directory('annual-reports')
                ->acceptedFileTypes(['application/pdf'])
                ->downloadable()
                ->openable(),

        ]);
    }

    public static function table(Table $table): Table
    {
       return $table
        ->columns([
            TextColumn::make('year')
                ->sortable()
                ->searchable(),

            TextColumn::make('created_at')
                ->dateTime(),
        ])
        ->defaultSort('year', 'desc')
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
            'index' => ListAnnualReports::route('/'),
            'create' => CreateAnnualReport::route('/create'),
            'edit' => EditAnnualReport::route('/{record}/edit'),
        ];
    }
}

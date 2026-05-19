<?php

namespace App\Filament\Resources\Faculties\RelationManagers;


use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use App\Models\Section;
use Filament\Forms\Components\{
    RichEditor,
    Select
};
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Actions\CreateAction;

class FacultyContentRelationManager extends RelationManager
{
    protected static ?string $title = 'Faculty Content';

    protected static bool $isLazy = false;
    protected static string $relationship = 'contents';

    public function form(Schema $schema): Schema
    {
        return $schema->schema([

            Tabs::make('Languages')
                ->tabs([

                    Tab::make('English')
                        ->schema([

                            Select::make('section_id')
                                ->label('Section')
                                ->options(
                                    Section::with('tab')
                                        ->get()
                                        ->mapWithKeys(fn($section) => [

                                            $section->id => ($section->tab->name['en'] ?? '') .

                                                ' → ' .

                                                ($section->heading['en'] ?? '')

                                        ])
                                )
                                ->searchable()
                                ->required(),

                            RichEditor::make('content.en')
                                ->label('Content (English)')
                                ->required()
                                ->columnSpanFull()
                                ->toolbarButtons([
                                    'bold',
                                    'italic',
                                    'underline',
                                    'strike',
                                    'subscript',
                                    'superscript',
                                    'link',
                                    'undo',
                                    'redo',
                                ]),

                        ]),

                    Tab::make('Hindi')
                        ->schema([

                            Select::make('section_id')
                                ->label('अनुभाग')
                                ->options(
                                    Section::with('tab')
                                        ->get()
                                        ->mapWithKeys(fn($section) => [

                                            $section->id => ($section->tab->name['hi'] ?? '') .

                                                ' → ' .

                                                ($section->heading['hi'] ?? '')

                                        ])
                                )
                                ->searchable(),
                                //->required(),

                            RichEditor::make('content.hi')
                                ->label('Content (Hindi)')
                                ->columnSpanFull()
                                ->toolbarButtons([
                                    'bold',
                                    'italic',
                                    'underline',
                                    'strike',
                                    'subscript',
                                    'superscript',
                                    'link',
                                    'undo',
                                    'redo',
                                ]),

                        ]),

                ])
                ->columnSpanFull(),

        ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('section.heading')
                    ->label('Section'),

                TextColumn::make('content')
                    ->limit(50),
            ])
            ->headerActions([
                CreateAction::make(),
            ])
            ->actions([
                \Filament\Actions\EditAction::make(),
                \Filament\Actions\DeleteAction::make(),
            ]);
        // return $table
        //     ->recordTitleAttribute('name')
        //     ->columns([
        //         TextColumn::make('name')
        //             ->searchable(),
        //     ])
        //     ->filters([
        //         //
        //     ])
        //     ->headerActions([
        //         CreateAction::make(),
        //         AssociateAction::make(),
        //     ])
        //     ->recordActions([
        //         EditAction::make(),
        //         DissociateAction::make(),
        //         DeleteAction::make(),
        //     ])
        //     ->toolbarActions([
        //         BulkActionGroup::make([
        //             DissociateBulkAction::make(),
        //             DeleteBulkAction::make(),
        //         ]),
        //     ]);
    }
}

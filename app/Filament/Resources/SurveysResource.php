<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SurveysResource\Pages;
use App\Filament\Resources\SurveysResource\RelationManagers;
use App\Models\Surveys;
use Dom\Text;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Columns\TextColumn;

class SurveysResource extends Resource
{
    protected static ?string $model = Surveys::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('company_id')
                    ->label('Company ID')
                    ->required()
                    ->maxLength(255),
                TextInput::make('title')
                    ->label('Survey Title')
                    ->required()
                    ->maxLength(255),
                TextInput::make('description')
                    ->label('Survey Description')
                    ->required()
                    ->maxLength(500),
                // TextInput::make('is_active')
                //     ->label('Is Active')
                //     ->required()
                //     ->maxLength(255),
                //     // ->default('1'), // Assuming '1' means active
                TextInput::make('start_date')
                    ->label('Start Date')
                    ->required()
                    ->maxLength(255),
                TextInput::make('end_date')
                    ->label('End Date')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('ID')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('company_id')
                    ->label('Company ID')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->label('Survey Title')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->label('Survey Description')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('is_active')
                    ->label('Is Active')
                    // ->boolean()
                    ->sortable(),
                Tables\Columns\TextColumn::make('start_date')
                    ->label('Start Date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('end_date')
                    ->label('End Date')
                    ->date()
                    ->sortable(),
            ])->filters([
                //
            ])->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListSurveys::route('/'),
            'create' => Pages\CreateSurveys::route('/create'),
            'edit' => Pages\EditSurveys::route('/{record}/edit'),
        ];
    }
}
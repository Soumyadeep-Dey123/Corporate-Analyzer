<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnswerResource\Pages;
use App\Filament\Resources\AnswerResource\RelationManagers;
use App\Models\Answers as Answer;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AnswerResource extends Resource
{
    protected static ?string $model = Answer::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('response_id')
                    ->label('Response ID')
                    ->required()
                    ->maxLength(255),
                TextInput::make('question_id')
                    ->label('Question ID')
                    ->required()
                    ->maxLength(255),
                TextInput::make('answer')
                    ->label('Answer')
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
                Tables\Columns\TextColumn::make('response_id')
                    ->label('Response ID')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('question_id')
                    ->label('Question ID')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('answer')
                    ->label('Answer')
                    ->sortable()
                    ->searchable(),
            ])->filters([
                //
            // ])->headerActions([
            //     Tables\Actions\CreateAction::make(),
            // ])
            // ->filters([
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
            'index' => Pages\ListAnswers::route('/'),
            'create' => Pages\CreateAnswer::route('/create'),
            'edit' => Pages\EditAnswer::route('/{record}/edit'),
        ];
    }
}
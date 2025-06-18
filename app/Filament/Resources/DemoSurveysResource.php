<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DemoSurveysResource\Pages;
use App\Filament\Resources\DemoSurveysResource\RelationManagers;
use App\Models\DemoSurvey;
use Dom\Text;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
// use Filament\Forms\Columns\TextColumn;
use Filament\Tables\Columns\TextColumn;

class DemoSurveysResource extends Resource
{
    protected static ?string $model = DemoSurvey::class;

    protected static ?string $navigationIcon = 'heroicon-o-play-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('email')
                    ->label('Email Address')
                    ->email()
                    ->required()
                    ->maxLength(255),
                TextInput::make('department')
                    ->label('Department')
                    ->required()
                    ->maxLength(255),
                TextInput::make('position')
                    ->label('Position')
                    ->required()
                    ->maxLength(255),
                TextInput::make('work_experience')
                    ->label('Work Experience')
                    ->required()
                    ->maxLength(255),
                TextInput::make('engagement')
                    ->label('Engagement')
                    ->required()
                    ->maxLength(255),
                TextInput::make('satisfaction')
                    ->label('Satisfaction')
                    ->required()
                    ->maxLength(255),
                TextInput::make('work_life_balance')
                    ->label('Work-Life Balance')
                    ->required()
                    ->maxLength(255),
                TextInput::make('communication')
                    ->label('Communication')
                    ->required()
                    ->maxLength(255),
                TextInput::make('leadership')
                    ->label('Leadership')
                    ->required()
                    ->maxLength(255),
                TextInput::make('growth')
                    ->label('Growth Opportunities')
                    ->required()
                    ->maxLength(255),
                TextInput::make('recommend')
                    ->label('Recommend to a Friend')
                    ->required()
                    ->maxLength(255),
                TextInput::make('feedback')
                    ->label('Additional Feedback')
                    ->required()
                    ->maxLength(1000),
                TextInput::make('improvements')
                    ->label('Improvements')
                    ->dateTime()
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('ID')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('name')
                    ->label('Name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email Address')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('department')
                    ->label('Department')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('position')
                    ->label('Position')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('work_experience')
                    ->label('Work Experience')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('engagement')
                    ->label('Engagement')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('satisfaction')
                    ->label('Satisfaction')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('work_life_balance')
                    ->label('Work-Life Balance')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('communication')
                    ->label('Communication')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('leadership')
                    ->label('Leadership')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('growth')
                    ->label('Growth Opportunities')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('recommend')
                    ->label('Recommend to a Friend')
                    ->sortable()
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
            'index' => Pages\ListDemoSurveys::route('/'),
            'create' => Pages\CreateDemoSurveys::route('/create'),
            'edit' => Pages\EditDemoSurveys::route('/{record}/edit'),
        ];
    }
}
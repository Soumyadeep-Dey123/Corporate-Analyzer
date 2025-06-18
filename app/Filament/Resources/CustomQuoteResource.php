<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomQuoteResource\Pages;
use App\Filament\Resources\CustomQuoteResource\RelationManagers;
use App\Models\CustomQuote;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class CustomQuoteResource extends Resource
{
    protected static ?string $model = CustomQuote::class;

    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('company_name')
                    ->label('Company Name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('contact_person')
                    ->label('Contact Person')
                    ->required()
                    ->maxLength(500),
                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required()
                    ->maxLength(20),
                TextInput::make('phone')
                    ->label('Phone Number')
                    ->required()
                    ->maxLength(50),
                TextInput::make('company_size')
                    ->label('Compaby SIze')
                    ->required()
                    ->maxLength(1000),
                TextInput::make('requirements')
                    ->label('Requirements')
                    ->required()
                    ->maxLength(1000),
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
                TextColumn::make('company_name')
                    ->label('Company Name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('contact_person')
                    ->label('Contact Person')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('phone')
                    ->label('Phone Number')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('company_size')
                    ->label('Company Size')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('requirements')
                    ->label('Requirements')
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
            'index' => Pages\ListCustomQuotes::route('/'),
            'create' => Pages\CreateCustomQuote::route('/create'),
            'edit' => Pages\EditCustomQuote::route('/{record}/edit'),
        ];
    }
}
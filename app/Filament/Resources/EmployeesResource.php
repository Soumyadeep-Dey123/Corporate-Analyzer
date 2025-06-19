<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmployeesResource\Pages;
use App\Filament\Resources\EmployeesResource\RelationManagers;
use App\Models\Employees;
use Dom\Text;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class EmployeesResource extends Resource
{
    protected static ?string $model = Employees::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('company_id')
                    ->label('Company ID')
                    ->required()
                    ->maxLength(255),
                TextInput::make('employee_name')
                    ->label('Employee Name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('employee_email')
                    ->label('Email Address')
                    ->email()
                    ->required()
                    ->maxLength(255),
                TextInput::make('employee_phone')
                    ->label('Phone Number')
                    ->tel()
                    ->required()
                    ->maxLength(20),

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
                TextColumn::make('company_id')
                    ->label('Company ID')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('employee_name')
                    ->label('Employee Name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('employee_email')
                    ->label('Email Address')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('employee_phone')
                    ->label('Phone Number')
                    ->sortable()
                    ->searchable(),
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
            'index' => Pages\ListEmployees::route('/'),
            'create' => Pages\CreateEmployees::route('/create'),
            'edit' => Pages\EditEmployees::route('/{record}/edit'),
        ];
    }
}

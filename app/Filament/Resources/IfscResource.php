<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IfscResource\Pages;
use App\Filament\Resources\IfscResource\RelationManagers;
use App\Models\Ifsc;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class IfscResource extends Resource
{
    protected static ?string $model = Ifsc::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('bank')
                ->searchable()
                ->sortable()->toggleable(),
            Tables\Columns\TextColumn::make('ifsc')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('micr')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('city')
                ->searchable()
                ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageIfscs::route('/'),
        ];
    }
}

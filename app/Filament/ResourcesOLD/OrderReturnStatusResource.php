<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderReturnStatusResource\Pages;
use App\Models\OrderReturnStatus;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class OrderReturnStatusResource extends Resource
{
    protected static ?string $model = OrderReturnStatus::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                Tables\Columns\TextColumn::make('name'),
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
            'index' => Pages\ListOrderReturnStatuses::route('/'),
            'create' => Pages\CreateOrderReturnStatus::route('/create'),
            'edit' => Pages\EditOrderReturnStatus::route('/{record}/edit'),
        ];
    }
}

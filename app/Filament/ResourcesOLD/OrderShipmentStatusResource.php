<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderShipmentStatusResource\Pages;
use App\Models\OrderShipmentStatus;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class OrderShipmentStatusResource extends Resource
{
    protected static ?string $model = OrderShipmentStatus::class;

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
            'index' => Pages\ListOrderShipmentStatuses::route('/'),
            'create' => Pages\CreateOrderShipmentStatus::route('/create'),
            'edit' => Pages\EditOrderShipmentStatus::route('/{record}/edit'),
        ];
    }
}

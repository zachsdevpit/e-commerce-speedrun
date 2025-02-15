<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderRefundStatusResource\Pages;
use App\Models\OrderRefundStatus;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class OrderRefundStatusResource extends Resource
{
    protected static ?string $model = OrderRefundStatus::class;

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
            'index' => Pages\ListOrderRefundStatuses::route('/'),
            'create' => Pages\CreateOrderRefundStatus::route('/create'),
            'edit' => Pages\EditOrderRefundStatus::route('/{record}/edit'),
        ];
    }
}

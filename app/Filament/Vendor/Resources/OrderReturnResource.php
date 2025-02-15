<?php

namespace App\Filament\Vendor\Resources;

use App\Filament\Vendor\Resources\OrderReturnResource\Pages;
use App\Filament\Vendor\Resources\OrderReturnResource\RelationManagers;
use App\Models\OrderReturn;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderReturnResource extends Resource
{
    protected static ?string $model = OrderReturn::class;

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
                //
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
            'index' => Pages\ListOrderReturns::route('/'),
            'create' => Pages\CreateOrderReturn::route('/create'),
            'edit' => Pages\EditOrderReturn::route('/{record}/edit'),
        ];
    }
}

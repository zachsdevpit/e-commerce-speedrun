<?php

namespace App\Filament\Admin\Clusters\Order\Resources\OrderReturnResource\Pages;

use App\Filament\Admin\Clusters\Order\Resources\OrderReturnResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOrderReturns extends ListRecords
{
    protected static string $resource = OrderReturnResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

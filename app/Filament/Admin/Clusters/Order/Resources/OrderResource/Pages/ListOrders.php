<?php

namespace App\Filament\Admin\Clusters\Order\Resources\OrderResource\Pages;

use App\Filament\Admin\Clusters\Order\Resources\OrderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOrders extends ListRecords
{
    protected static string $resource = OrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

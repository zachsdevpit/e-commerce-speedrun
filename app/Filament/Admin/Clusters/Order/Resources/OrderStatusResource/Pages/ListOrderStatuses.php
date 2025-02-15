<?php

namespace App\Filament\Admin\Clusters\Order\Resources\OrderStatusResource\Pages;

use App\Filament\Admin\Clusters\Order\Resources\OrderStatusResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOrderStatuses extends ListRecords
{
    protected static string $resource = OrderStatusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

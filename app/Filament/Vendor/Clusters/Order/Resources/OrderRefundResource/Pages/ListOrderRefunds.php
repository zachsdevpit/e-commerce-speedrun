<?php

namespace App\Filament\Vendor\Clusters\Order\Resources\OrderRefundResource\Pages;

use App\Filament\Vendor\Clusters\Order\Resources\OrderRefundResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOrderRefunds extends ListRecords
{
    protected static string $resource = OrderRefundResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

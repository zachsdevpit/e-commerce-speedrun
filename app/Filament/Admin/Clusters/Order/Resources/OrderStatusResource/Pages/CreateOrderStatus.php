<?php

namespace App\Filament\Admin\Clusters\Order\Resources\OrderStatusResource\Pages;

use App\Filament\Admin\Clusters\Order\Resources\OrderStatusResource;
use Filament\Resources\Pages\CreateRecord;

class CreateOrderStatus extends CreateRecord
{
    protected static string $resource = OrderStatusResource::class;
}

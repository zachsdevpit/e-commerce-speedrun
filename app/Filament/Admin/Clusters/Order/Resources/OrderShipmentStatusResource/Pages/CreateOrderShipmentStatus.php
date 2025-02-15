<?php

namespace App\Filament\Admin\Clusters\Order\Resources\OrderShipmentStatusResource\Pages;

use App\Filament\Admin\Clusters\Order\Resources\OrderShipmentStatusResource;
use Filament\Resources\Pages\CreateRecord;

class CreateOrderShipmentStatus extends CreateRecord
{
    protected static string $resource = OrderShipmentStatusResource::class;
}

<?php

namespace App\Filament\Admin\Clusters\Order\Resources\OrderShipmentResource\Pages;

use App\Filament\Admin\Clusters\Order\Resources\OrderShipmentResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOrderShipment extends CreateRecord
{
    protected static string $resource = OrderShipmentResource::class;
}

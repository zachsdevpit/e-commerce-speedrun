<?php

namespace App\Filament\Admin\Clusters\Order\Resources\OrderReturnStatusResource\Pages;

use App\Filament\Admin\Clusters\Order\Resources\OrderReturnStatusResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOrderReturnStatus extends CreateRecord
{
    protected static string $resource = OrderReturnStatusResource::class;
}

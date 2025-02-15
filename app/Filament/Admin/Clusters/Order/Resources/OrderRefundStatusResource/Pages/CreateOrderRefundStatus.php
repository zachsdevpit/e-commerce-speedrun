<?php

namespace App\Filament\Admin\Clusters\Order\Resources\OrderRefundStatusResource\Pages;

use App\Filament\Admin\Clusters\Order\Resources\OrderRefundStatusResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOrderRefundStatus extends CreateRecord
{
    protected static string $resource = OrderRefundStatusResource::class;
}

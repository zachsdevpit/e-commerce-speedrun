<?php

namespace App\Filament\Admin\Clusters\Order\Resources\OrderRefundResource\Pages;

use App\Filament\Admin\Clusters\Order\Resources\OrderRefundResource;
use Filament\Resources\Pages\CreateRecord;

class CreateOrderRefund extends CreateRecord
{
    protected static string $resource = OrderRefundResource::class;
}

<?php

namespace App\Filament\Vendor\Clusters\Order\Resources\OrderRefundResource\Pages;

use App\Filament\Vendor\Clusters\Order\Resources\OrderRefundResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOrderRefund extends CreateRecord
{
    protected static string $resource = OrderRefundResource::class;
}

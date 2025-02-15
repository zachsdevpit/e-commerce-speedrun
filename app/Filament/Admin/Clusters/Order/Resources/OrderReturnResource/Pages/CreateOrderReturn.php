<?php

namespace App\Filament\Admin\Clusters\Order\Resources\OrderReturnResource\Pages;

use App\Filament\Admin\Clusters\Order\Resources\OrderReturnResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOrderReturn extends CreateRecord
{
    protected static string $resource = OrderReturnResource::class;
}

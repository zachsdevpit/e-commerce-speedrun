<?php

namespace App\Filament\Vendor\Clusters\Order\Resources\OrderResource\Pages;

use App\Filament\Vendor\Clusters\Order\Resources\OrderResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOrder extends CreateRecord
{
    protected static string $resource = OrderResource::class;
}

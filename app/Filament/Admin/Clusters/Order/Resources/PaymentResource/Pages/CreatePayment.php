<?php

namespace App\Filament\Admin\Clusters\Order\Resources\PaymentResource\Pages;

use App\Filament\Admin\Clusters\Order\Resources\PaymentResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePayment extends CreateRecord
{
    protected static string $resource = PaymentResource::class;
}

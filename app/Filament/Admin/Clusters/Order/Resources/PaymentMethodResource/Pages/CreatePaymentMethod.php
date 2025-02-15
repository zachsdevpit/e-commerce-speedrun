<?php

namespace App\Filament\Admin\Clusters\Order\Resources\PaymentMethodResource\Pages;

use App\Filament\Admin\Clusters\Order\Resources\PaymentMethodResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePaymentMethod extends CreateRecord
{
    protected static string $resource = PaymentMethodResource::class;
}

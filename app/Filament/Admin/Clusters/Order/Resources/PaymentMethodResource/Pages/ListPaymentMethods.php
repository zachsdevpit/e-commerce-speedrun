<?php

namespace App\Filament\Admin\Clusters\Order\Resources\PaymentMethodResource\Pages;

use App\Filament\Admin\Clusters\Order\Resources\PaymentMethodResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPaymentMethods extends ListRecords
{
    protected static string $resource = PaymentMethodResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

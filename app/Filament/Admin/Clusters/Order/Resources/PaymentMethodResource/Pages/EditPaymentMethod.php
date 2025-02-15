<?php

namespace App\Filament\Admin\Clusters\Order\Resources\PaymentMethodResource\Pages;

use App\Filament\Admin\Clusters\Order\Resources\PaymentMethodResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPaymentMethod extends EditRecord
{
    protected static string $resource = PaymentMethodResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

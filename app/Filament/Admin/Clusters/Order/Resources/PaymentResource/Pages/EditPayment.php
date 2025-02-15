<?php

namespace App\Filament\Admin\Clusters\Order\Resources\PaymentResource\Pages;

use App\Filament\Admin\Clusters\Order\Resources\PaymentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPayment extends EditRecord
{
    protected static string $resource = PaymentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Admin\Clusters\Order\Resources\OrderShipmentResource\Pages;

use App\Filament\Admin\Clusters\Order\Resources\OrderShipmentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrderShipment extends EditRecord
{
    protected static string $resource = OrderShipmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

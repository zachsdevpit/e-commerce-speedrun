<?php

namespace App\Filament\Resources\OrderShipmentStatusResource\Pages;

use App\Filament\Resources\OrderShipmentStatusResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrderShipmentStatus extends EditRecord
{
    protected static string $resource = OrderShipmentStatusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

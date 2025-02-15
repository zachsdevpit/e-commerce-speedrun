<?php

namespace App\Filament\Admin\Clusters\Order\Resources\OrderStatusResource\Pages;

use App\Filament\Admin\Clusters\Order\Resources\OrderStatusResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrderStatus extends EditRecord
{
    protected static string $resource = OrderStatusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

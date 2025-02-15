<?php

namespace App\Filament\Admin\Clusters\Order\Resources\OrderRefundStatusResource\Pages;

use App\Filament\Admin\Clusters\Order\Resources\OrderRefundStatusResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrderRefundStatus extends EditRecord
{
    protected static string $resource = OrderRefundStatusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

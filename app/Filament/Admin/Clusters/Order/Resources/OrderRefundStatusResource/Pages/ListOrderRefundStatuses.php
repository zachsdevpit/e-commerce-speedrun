<?php

namespace App\Filament\Admin\Clusters\Order\Resources\OrderRefundStatusResource\Pages;

use App\Filament\Admin\Clusters\Order\Resources\OrderRefundStatusResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOrderRefundStatuses extends ListRecords
{
    protected static string $resource = OrderRefundStatusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

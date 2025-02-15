<?php

namespace App\Filament\Vendor\Clusters\Order\Resources\OrderResource\Pages;

use App\Filament\Vendor\Clusters\Order\Resources\OrderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrder extends EditRecord
{
    protected static string $resource = OrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\OrderRefundStatusResource\Pages;

use App\Filament\Resources\OrderRefundStatusResource;
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

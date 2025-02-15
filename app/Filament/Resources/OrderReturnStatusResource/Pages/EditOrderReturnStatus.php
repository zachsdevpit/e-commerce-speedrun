<?php

namespace App\Filament\Resources\OrderReturnStatusResource\Pages;

use App\Filament\Resources\OrderReturnStatusResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrderReturnStatus extends EditRecord
{
    protected static string $resource = OrderReturnStatusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

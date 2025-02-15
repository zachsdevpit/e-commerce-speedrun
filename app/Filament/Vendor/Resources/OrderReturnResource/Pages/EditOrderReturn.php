<?php

namespace App\Filament\Vendor\Resources\OrderReturnResource\Pages;

use App\Filament\Vendor\Resources\OrderReturnResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrderReturn extends EditRecord
{
    protected static string $resource = OrderReturnResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

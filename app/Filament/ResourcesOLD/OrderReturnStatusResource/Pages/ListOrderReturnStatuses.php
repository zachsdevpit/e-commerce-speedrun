<?php

namespace App\Filament\Resources\OrderReturnStatusResource\Pages;

use App\Filament\Resources\OrderReturnStatusResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOrderReturnStatuses extends ListRecords
{
    protected static string $resource = OrderReturnStatusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

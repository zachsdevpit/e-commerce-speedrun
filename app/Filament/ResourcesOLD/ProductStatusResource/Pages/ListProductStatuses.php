<?php

namespace App\Filament\Resources\ProductStatusResource\Pages;

use App\Filament\Resources\ProductStatusResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProductStatuses extends ListRecords
{
    protected static string $resource = ProductStatusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

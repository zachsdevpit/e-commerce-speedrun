<?php

namespace App\Filament\Admin\Clusters\Product\Resources\ProductStatusResource\Pages;

use App\Filament\Admin\Clusters\Product\Resources\ProductStatusResource;
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

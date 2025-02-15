<?php

namespace App\Filament\Admin\Clusters\Product\Resources\ProductAttributeResource\Pages;

use App\Filament\Admin\Clusters\Product\Resources\ProductAttributeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProductAttributes extends ListRecords
{
    protected static string $resource = ProductAttributeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

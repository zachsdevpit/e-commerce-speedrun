<?php

namespace App\Filament\Admin\Clusters\Product\Resources\ProductAttributeResource\Pages;

use App\Filament\Admin\Clusters\Product\Resources\ProductAttributeResource;
use Filament\Resources\Pages\CreateRecord;

class CreateProductAttribute extends CreateRecord
{
    protected static string $resource = ProductAttributeResource::class;
}

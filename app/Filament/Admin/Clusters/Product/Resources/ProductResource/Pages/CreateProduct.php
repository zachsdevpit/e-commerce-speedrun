<?php

namespace App\Filament\Admin\Clusters\Product\Resources\ProductResource\Pages;

use App\Filament\Admin\Clusters\Product\Resources\ProductResource;
use Filament\Resources\Pages\CreateRecord;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;
}

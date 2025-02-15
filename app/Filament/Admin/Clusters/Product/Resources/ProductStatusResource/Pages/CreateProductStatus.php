<?php

namespace App\Filament\Admin\Clusters\Product\Resources\ProductStatusResource\Pages;

use App\Filament\Admin\Clusters\Product\Resources\ProductStatusResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProductStatus extends CreateRecord
{
    protected static string $resource = ProductStatusResource::class;
}

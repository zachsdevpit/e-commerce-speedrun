<?php

namespace App\Filament\Admin\Clusters\Product\Resources\ProductTagResource\Pages;

use App\Filament\Admin\Clusters\Product\Resources\ProductTagResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProductTag extends CreateRecord
{
    protected static string $resource = ProductTagResource::class;
}

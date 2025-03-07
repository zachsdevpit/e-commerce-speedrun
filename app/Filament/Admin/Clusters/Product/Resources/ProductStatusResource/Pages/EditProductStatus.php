<?php

namespace App\Filament\Admin\Clusters\Product\Resources\ProductStatusResource\Pages;

use App\Filament\Admin\Clusters\Product\Resources\ProductStatusResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductStatus extends EditRecord
{
    protected static string $resource = ProductStatusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

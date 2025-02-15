<?php

namespace App\Filament\Admin\Clusters\Product\Resources\ProductTagResource\Pages;

use App\Filament\Admin\Clusters\Product\Resources\ProductTagResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductTag extends EditRecord
{
    protected static string $resource = ProductTagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

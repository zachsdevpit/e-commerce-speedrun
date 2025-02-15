<?php

namespace App\Filament\Admin\Clusters\Management\Resources\VendorResource\Pages;

use App\Filament\Admin\Clusters\Management\Resources\VendorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVendor extends EditRecord
{
    protected static string $resource = VendorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

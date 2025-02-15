<?php

namespace App\Filament\Admin\Clusters\Specials\Resources\CouponResource\Pages;

use App\Filament\Admin\Clusters\Specials\Resources\CouponResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCoupons extends ListRecords
{
    protected static string $resource = CouponResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

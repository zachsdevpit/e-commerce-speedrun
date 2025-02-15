<?php

namespace App\Filament\Customer\Resources\WishlistResource\Pages;

use App\Filament\Customer\Resources\WishlistResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWishlists extends ListRecords
{
    protected static string $resource = WishlistResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

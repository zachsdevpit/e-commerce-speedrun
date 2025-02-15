<?php

namespace App\Filament\Customer\Resources\WishlistResource\Pages;

use App\Filament\Customer\Resources\WishlistResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateWishlist extends CreateRecord
{
    protected static string $resource = WishlistResource::class;
}

<?php

namespace App\Filament\Customer\Resources\ReviewResource\Pages;

use App\Filament\Customer\Resources\ReviewResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateReview extends CreateRecord
{
    protected static string $resource = ReviewResource::class;
}

<?php

namespace App\Filament\Admin\Clusters\Management\Resources\ReviewResource\Pages;

use App\Filament\Admin\Clusters\Management\Resources\ReviewResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateReview extends CreateRecord
{
    protected static string $resource = ReviewResource::class;
}

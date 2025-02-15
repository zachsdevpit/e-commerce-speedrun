<?php

namespace App\Filament\Admin\Clusters\Management\Resources\UserResource\Pages;

use App\Filament\Admin\Clusters\Management\Resources\UserResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
}

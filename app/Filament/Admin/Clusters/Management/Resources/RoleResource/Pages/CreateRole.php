<?php

namespace App\Filament\Admin\Clusters\Management\Resources\RoleResource\Pages;

use App\Filament\Admin\Clusters\Management\Resources\RoleResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRole extends CreateRecord
{
    protected static string $resource = RoleResource::class;
}

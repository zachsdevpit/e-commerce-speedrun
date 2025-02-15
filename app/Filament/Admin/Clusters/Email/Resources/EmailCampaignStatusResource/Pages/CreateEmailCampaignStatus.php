<?php

namespace App\Filament\Admin\Clusters\Email\Resources\EmailCampaignStatusResource\Pages;

use App\Filament\Admin\Clusters\Email\Resources\EmailCampaignStatusResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEmailCampaignStatus extends CreateRecord
{
    protected static string $resource = EmailCampaignStatusResource::class;
}

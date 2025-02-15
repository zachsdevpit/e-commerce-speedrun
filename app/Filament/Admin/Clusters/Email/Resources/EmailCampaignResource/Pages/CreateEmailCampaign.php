<?php

namespace App\Filament\Admin\Clusters\Email\Resources\EmailCampaignResource\Pages;

use App\Filament\Admin\Clusters\Email\Resources\EmailCampaignResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEmailCampaign extends CreateRecord
{
    protected static string $resource = EmailCampaignResource::class;
}

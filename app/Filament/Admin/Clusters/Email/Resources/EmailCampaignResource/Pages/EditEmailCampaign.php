<?php

namespace App\Filament\Admin\Clusters\Email\Resources\EmailCampaignResource\Pages;

use App\Filament\Admin\Clusters\Email\Resources\EmailCampaignResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEmailCampaign extends EditRecord
{
    protected static string $resource = EmailCampaignResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

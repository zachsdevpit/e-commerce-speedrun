<?php

namespace App\Filament\Resources\EmailCampaignStatusResource\Pages;

use App\Filament\Resources\EmailCampaignStatusResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEmailCampaignStatuses extends ListRecords
{
    protected static string $resource = EmailCampaignStatusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

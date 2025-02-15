<?php

namespace App\Filament\Admin\Clusters\Specials\Resources\PromotionResource\Pages;

use App\Filament\Admin\Clusters\Specials\Resources\PromotionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPromotion extends EditRecord
{
    protected static string $resource = PromotionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

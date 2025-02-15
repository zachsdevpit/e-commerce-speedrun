<?php

namespace App\Filament\Admin\Clusters\Specials\Resources\PromotionResource\Pages;

use App\Filament\Admin\Clusters\Specials\Resources\PromotionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPromotions extends ListRecords
{
    protected static string $resource = PromotionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

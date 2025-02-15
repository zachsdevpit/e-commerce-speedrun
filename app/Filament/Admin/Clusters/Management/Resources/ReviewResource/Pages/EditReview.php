<?php

namespace App\Filament\Admin\Clusters\Management\Resources\ReviewResource\Pages;

use App\Filament\Admin\Clusters\Management\Resources\ReviewResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditReview extends EditRecord
{
    protected static string $resource = ReviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

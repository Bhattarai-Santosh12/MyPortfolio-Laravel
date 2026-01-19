<?php

namespace App\Filament\Resources\DetailPages\Pages;

use App\Filament\Resources\DetailPages\DetailPageResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateDetailPage extends CreateRecord
{
    protected static string $resource = DetailPageResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Created')
            ->body('Created Successfully.');
    }
}

<?php

namespace App\Filament\Resources\Aboutuses\Pages;

use App\Filament\Resources\Aboutuses\AboutusResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateAboutus extends CreateRecord
{
    protected static string $resource = AboutusResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Created')
            ->body('created successfully.');
    }
}

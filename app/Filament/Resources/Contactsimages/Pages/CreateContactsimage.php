<?php

namespace App\Filament\Resources\Contactsimages\Pages;

use App\Filament\Resources\Contactsimages\ContactsimageResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;


class CreateContactsimage extends CreateRecord
{
    protected static string $resource = ContactsimageResource::class;

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

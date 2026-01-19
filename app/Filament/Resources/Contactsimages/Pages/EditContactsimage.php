<?php

namespace App\Filament\Resources\Contactsimages\Pages;

use App\Filament\Resources\Contactsimages\ContactsimageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditContactsimage extends EditRecord
{
    protected static string $resource = ContactsimageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Updated')
            ->body('Updated successfully.');
    }
}

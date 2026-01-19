<?php

namespace App\Filament\Resources\Contactsimages\Pages;

use App\Filament\Resources\Contactsimages\ContactsimageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListContactsimages extends ListRecords
{
    protected static string $resource = ContactsimageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\Contactsimages\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;

class ContactsimageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image')
                ->disk('public')  
                ->directory('Contactsimage')
                ->columnSpan(2),
            ]);
    }
}

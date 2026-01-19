<?php

namespace App\Filament\Resources\Contacts\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class ContactsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->label('Title')->required()->maxLength(255)->columnSpan(2),
                TextInput::make('description')->label('Description')->required()->maxLength(255)->columnSpan(2),
                TextInput::make('icon')->label('Icon')->required()->maxLength(255)->columnSpan(2),
                TextInput::make('link')->label('Link')->maxLength(255)->columnSpan(2),
                FileUpload::make('image')
                ->disk('public')  
                ->directory('blogs')
                ->columnSpan(2)
            ]);
    }
}

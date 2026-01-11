<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->label('Title')->required()->columnSpan(2),
                TextInput::make('icons')->label('Icons')->required()->columnSpan(2)->placeholder('Use Only Font Awesome Icons'),
            ]);
    }
}

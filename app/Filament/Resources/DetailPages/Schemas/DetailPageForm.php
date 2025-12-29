<?php

namespace App\Filament\Resources\DetailPages\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class DetailPageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('greetings')->columnSpan(2),
                TextInput::make('short_discription')->columnSpan(2),
                TextInput::make('discription')->columnSpan(2),
                FileUpload::make('image')
                ->disk('public')              // 👈 store in storage/app/public
                ->directory('detailpages')    // 👈 subfolder name
                ->image()
                ->columnSpan(2)
            ]);
    }
}

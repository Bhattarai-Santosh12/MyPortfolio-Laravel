<?php

namespace App\Filament\Resources\Skills\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class SkillsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->label('Title')->required()->columnSpan(2),
                fileUpload::make('image')->label('Image')->disk('public')              // 👈 store in storage/app/public
                ->directory('skillspages')
                ->image()
                ->columnSpan(2)
            ]);
    }
}

<?php

namespace App\Filament\Resources\Aboutuses\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;

class AboutusForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                RichEditor::make('description')->columnSpan(2),
                FileUpload::make('image')
                ->disk('public')  
                ->directory('aboutus')
                ->columnSpan(2),
                FileUpload::make('cvdownload')
                ->disk('public')  
                ->directory('aboutus')
                ->columnSpan(2),
            ]);
    }
}

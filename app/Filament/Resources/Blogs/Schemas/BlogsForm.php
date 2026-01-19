<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;

class BlogsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->label('Title')->required()->maxLength(255)->columnSpan(2),
                TextInput::make('author')->label('Author')->required()->maxLength(255)->columnSpan(2),
                RichEditor::make('description')->label('Description')->required()->columnSpan(2),
                FileUpload::make('image')
                ->disk('public')  
                ->directory('blogs')
                ->columnSpan(2),
            ]);
    }
}

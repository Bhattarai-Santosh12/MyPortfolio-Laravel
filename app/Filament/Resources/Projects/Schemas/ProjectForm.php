<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->label('Project Title')->required()->columnSpan(2),
                Textarea::make('description')->label('Description')->columnSpan(2),
                FileUpload::make('image')
                ->disk('public')              // 👈 store in storage/app/public
                ->directory('detailpages')    // 👈 subfolder name
                ->image()
                ->columnSpan(2),
                TextInput::make('link')->label('Project Link')->columnSpan(2)
            ]);
    }
}

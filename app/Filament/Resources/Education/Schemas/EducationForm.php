<?php

namespace App\Filament\Resources\Education\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;

class EducationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('degree_name')->label('Degree Name')->required()->columnSpan(2),
                TextInput::make('completion_year')->label('Completion Year')->required()->columnSpan(2),
                TextInput::make('institute')->label('Institute')->required()->columnSpan(2),
                RichEditor::make('short_description')->label('Short Description')->required()->columnSpan(2),
            ]);
    }
}

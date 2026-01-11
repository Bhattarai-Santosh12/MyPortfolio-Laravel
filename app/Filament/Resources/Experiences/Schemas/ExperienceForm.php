<?php

namespace App\Filament\Resources\Experiences\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;

class ExperienceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('role_title')->label('Role Title')->required()->columnSpan(2),
                TextInput::make('duration')->label('Duration')->required()->columnSpan(2),
                TextInput::make('company_name')->label('Company Name')->required()->columnSpan(2),
                RichEditor::make('description')->label('Description')->nullable()->columnSpan(2),
            ]);
    }
}

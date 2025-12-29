<?php

namespace App\Filament\Resources\Aboutuses;

use App\Filament\Resources\Aboutuses\Pages\CreateAboutus;
use App\Filament\Resources\Aboutuses\Pages\EditAboutus;
use App\Filament\Resources\Aboutuses\Pages\ListAboutuses;
use App\Filament\Resources\Aboutuses\Schemas\AboutusForm;
use App\Filament\Resources\Aboutuses\Tables\AboutusesTable;
use App\Models\Aboutus;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AboutusResource extends Resource
{
    protected static ?string $navigationLabel = 'About Us';
    protected static ?string $pluralModelLabel = 'About Us';
    protected static ?string $slug = 'about-us';
    
    protected static ?string $model = Aboutus::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return AboutusForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AboutusesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAboutuses::route('/'),
            'create' => CreateAboutus::route('/create'),
            'edit' => EditAboutus::route('/{record}/edit'),
        ];
    }
}

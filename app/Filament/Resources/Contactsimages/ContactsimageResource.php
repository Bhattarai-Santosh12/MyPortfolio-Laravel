<?php

namespace App\Filament\Resources\Contactsimages;

use App\Filament\Resources\Contactsimages\Pages\CreateContactsimage;
use App\Filament\Resources\Contactsimages\Pages\EditContactsimage;
use App\Filament\Resources\Contactsimages\Pages\ListContactsimages;
use App\Filament\Resources\Contactsimages\Schemas\ContactsimageForm;
use App\Filament\Resources\Contactsimages\Tables\ContactsimagesTable;
use App\Models\Contactsimage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ContactsimageResource extends Resource
{
    protected static ?string $model = Contactsimage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'contactsimage';

    public static function form(Schema $schema): Schema
    {
        return ContactsimageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ContactsimagesTable::configure($table);
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
            'index' => ListContactsimages::route('/'),
            'create' => CreateContactsimage::route('/create'),
            'edit' => EditContactsimage::route('/{record}/edit'),
        ];
    }
}

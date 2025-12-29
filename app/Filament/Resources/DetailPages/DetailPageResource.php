<?php

namespace App\Filament\Resources\DetailPages;

use App\Filament\Resources\DetailPages\Pages\CreateDetailPage;
use App\Filament\Resources\DetailPages\Pages\EditDetailPage;
use App\Filament\Resources\DetailPages\Pages\ListDetailPages;
use App\Filament\Resources\DetailPages\Schemas\DetailPageForm;
use App\Filament\Resources\DetailPages\Tables\DetailPagesTable;
use App\Models\DetailPage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DetailPageResource extends Resource
{
    protected static ?string $model = DetailPage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return DetailPageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DetailPagesTable::configure($table);
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
            'index' => ListDetailPages::route('/'),
            'create' => CreateDetailPage::route('/create'),
            'edit' => EditDetailPage::route('/{record}/edit'),
        ];
    }
}

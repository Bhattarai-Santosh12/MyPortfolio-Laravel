<?php

namespace App\Filament\Resources\DetailPages\Pages;

use App\Filament\Resources\DetailPages\DetailPageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDetailPages extends ListRecords
{
    protected static string $resource = DetailPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

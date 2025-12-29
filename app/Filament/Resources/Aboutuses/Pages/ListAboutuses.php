<?php

namespace App\Filament\Resources\Aboutuses\Pages;

use App\Filament\Resources\Aboutuses\AboutusResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAboutuses extends ListRecords
{
    protected static string $resource = AboutusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

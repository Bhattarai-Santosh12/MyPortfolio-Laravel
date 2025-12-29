<?php

namespace App\Filament\Resources\Aboutuses\Pages;

use App\Filament\Resources\Aboutuses\AboutusResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAboutus extends EditRecord
{
    protected static string $resource = AboutusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

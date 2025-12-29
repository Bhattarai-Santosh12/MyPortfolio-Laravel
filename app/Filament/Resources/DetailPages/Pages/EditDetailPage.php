<?php

namespace App\Filament\Resources\DetailPages\Pages;

use App\Filament\Resources\DetailPages\DetailPageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDetailPage extends EditRecord
{
    protected static string $resource = DetailPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

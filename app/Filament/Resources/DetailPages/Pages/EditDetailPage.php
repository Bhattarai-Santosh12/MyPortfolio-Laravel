<?php

namespace App\Filament\Resources\DetailPages\Pages;

use App\Filament\Resources\DetailPages\DetailPageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditDetailPage extends EditRecord
{
    protected static string $resource = DetailPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Updated')
            ->body('Updated successfully.');
    }
}

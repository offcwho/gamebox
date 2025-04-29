<?php

namespace App\Filament\Admin\Resources\IndexPageResource\Pages;

use App\Filament\Admin\Resources\IndexPageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIndexPage extends EditRecord
{
    protected static string $resource = IndexPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

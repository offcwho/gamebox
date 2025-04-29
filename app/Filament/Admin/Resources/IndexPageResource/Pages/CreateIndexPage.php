<?php

namespace App\Filament\Admin\Resources\IndexPageResource\Pages;

use App\Filament\Admin\Resources\IndexPageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateIndexPage extends CreateRecord
{
    protected static string $resource = IndexPageResource::class;
}

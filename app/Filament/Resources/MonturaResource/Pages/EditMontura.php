<?php

namespace App\Filament\Resources\MonturaResource\Pages;

use App\Filament\Resources\MonturaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMontura extends EditRecord
{
    protected static string $resource = MonturaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

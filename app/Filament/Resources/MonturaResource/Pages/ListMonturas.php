<?php

namespace App\Filament\Resources\MonturaResource\Pages;

use App\Filament\Resources\MonturaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMonturas extends ListRecords
{
    protected static string $resource = MonturaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

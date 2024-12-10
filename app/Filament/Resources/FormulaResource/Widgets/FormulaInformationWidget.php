<?php

namespace App\Filament\Resources\FormulaResource\Widgets;

use App\Models\Formula;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class FormulaInformationWidget extends BaseWidget
{
    public ?Formula $record;

    protected function getStats(): array
    {
        return [
            Stat::make('Codigo', str($this->record->codigo)->upper())
                ->description('Asociado a # Cedula: ' . $this->record->cliente->no_doc),
        ];
    }
}

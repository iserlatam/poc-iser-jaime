<?php

namespace App\Filament\Resources\ClienteResource\Widgets;

use App\Models\Cliente;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ClienteStatsWidget extends BaseWidget
{

    public ?Cliente $record;

    protected function getStats(): array
    {
        return [
            Stat::make('Cliente', $this->record->nombre_completo),
        ];
    }
}

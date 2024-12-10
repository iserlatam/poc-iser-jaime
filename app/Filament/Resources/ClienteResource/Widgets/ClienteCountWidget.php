<?php

namespace App\Filament\Resources\ClienteResource\Widgets;

use App\Models\Cliente;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ClienteCountWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Nuevos clientes', Cliente::count())
                ->description('Clientes añadidos este mes')
                ->descriptionIcon('heroicon-m-user-group', IconPosition::Before)
                ->chart([1, 2, 4, 5, 6, 10])
                ->color('info')
        ];
    }
}

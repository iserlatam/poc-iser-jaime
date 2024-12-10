<?php

namespace App\Filament\Widgets;

use App\Models\Cliente;
use App\Models\Formula;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\Concerns\InteractsWithPageFilters;

class DashboardGeneralStatsWidget extends BaseWidget
{
    use InteractsWithPageFilters;

    protected function getColumns(): int
    {
        return 2;
    }

    protected function getStats(): array
    {

        // $doc = $this->filters['no_doc'];

        return [
            Stat::make('# Clientes', Cliente::all()->count())
                ->description('Clientes registrados en el sistema')
                ->descriptionIcon('heroicon-s-user-group', IconPosition::Before)
                ->color('success'),
            Stat::make('# Formulas', Formula::all()->count())
                ->description('Total de formulas generadas en el sistema')
                ->descriptionIcon('heroicon-s-document', IconPosition::Before)
                ->color('info'),
            // Stat::make('Total ventas', '$190.000')
            //     ->description('Valor total de ventas para esta semana')
            //     ->descriptionIcon('heroicon-s-currency-dollar', IconPosition::Before)
            //     ->color('info'),
            // Stat::make(
            //     'Nuevos clientes',
            //     Cliente::when(
            //         $start,
            //         fn($query) => $query->whereDate('created_at', '>', $this->filters['startDate'])
            //     )
            //         ->when(
            //             $end,
            //             fn($query) => $query->whereDate('created_at', '<', $this->filters['endDate'])
            //         )
            //         ->count()
            // )
            //     ->description('Clientes añadidos este mes')
            //     ->descriptionIcon('heroicon-m-user-group', IconPosition::Before)
            //     ->chart([1, 2, 4, 5, 6, 10])
            //     ->color('info'),
        ];
    }
}

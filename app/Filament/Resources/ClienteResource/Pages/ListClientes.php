<?php

namespace App\Filament\Resources\ClienteResource\Pages;

use App\Filament\Resources\ClienteResource;
use App\Filament\Resources\ClienteResource\Widgets\ClienteCountWidget;
use App\Filament\Widgets\ClienteWidget;
use App\Models\Cliente;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Illuminate\Database\Eloquent\Builder;

class ListClientes extends ListRecords
{

    protected static string $resource = ClienteResource::class;


    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    // protected function getHeaderWidgets(): array
    // {
    //     return [
    //         ClienteCountWidget::class,
    //     ];
    // }

    // protected function getFooterWidgets(): array
    // {
    //     return [
    //         ClienteCountWidget::class,
    //     ];
    // }

    public function getTabs(): array
    {
        return [
            'Todos' => Tab::make(),
            'Últimos 7 días' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query): Builder => $query->where('created_at', '>=', now()->subWeek()))
                ->badge(Cliente::query()->where('created_at', '>=', now()->subWeek())->count()),
        ];
    }
}

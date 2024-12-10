<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\FormulaResource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class FormulaDashboardTableWidget extends BaseWidget
{

    protected int | string | array  $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                FormulaResource::getEloquentQuery()
            )
            ->defaultPaginationPageOption(5)
            ->defaultSort('created_at', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('codigo')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cliente.nombre_completo')
                    ->sortable(),
                Tables\Columns\TextColumn::make('cliente.tipo_doc')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('cliente.no_doc')
                    ->sortable(),
                Tables\Columns\TextColumn::make('montura.nombre')
                    ->sortable(),
                Tables\Columns\TextColumn::make('montura.fabricante.nombre')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ]);
    }
}

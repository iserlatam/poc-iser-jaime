<?php

namespace App\Filament\Exports;

use App\Models\Cliente;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class ClienteExporter extends Exporter
{
    protected static ?string $model = Cliente::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('id')
                ->label('ID'),
            ExportColumn::make('created_at')
                ->label('FECHA DE CREACION'),
            ExportColumn::make('nombre_completo'),
            ExportColumn::make('tipo_doc')
                ->label('TIPO DE DOC'),
            ExportColumn::make('no_doc')
                ->label('NUMERO DE DOC'),
            ExportColumn::make('edad'),
            ExportColumn::make('ciudad'),
            ExportColumn::make('direccion'),
            ExportColumn::make('celular'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your cliente export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}

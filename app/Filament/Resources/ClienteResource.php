<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClienteResource\Pages;
use App\Filament\Resources\ClienteResource\Widgets\ClienteCountWidget;
use App\Models\Cliente;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\HeaderActionsPosition;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use pxlrbt\FilamentExcel\Actions\Tables\ExportAction as TablesExportAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;

class ClienteResource extends Resource
{
    protected static ?string $model = Cliente::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $activeNavigationIcon = 'heroicon-s-user-group';

    protected static ?string $navigationGroup = 'Formulas';

    protected static ?string $recordTitleAttribute = 'no_doc';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Información Personal
                Forms\Components\Section::make('Información personal')
                    ->description('Información esencial del cliente como lo es su nombre y datos de identificación')
                    ->schema([
                        // GRID CUSTOMER LAYOUT
                        Forms\Components\Grid::make([
                            'default' => 1,
                            'sm' => 4,
                            'md' => 4,
                            'lg' => 4,
                        ])
                            ->schema([
                                // ROW COL 2
                                Forms\Components\TextInput::make('nombre_completo')
                                    ->required()
                                    ->maxLength(255)
                                    ->columnSpan([
                                        'default' => 1,
                                        'sm' => 2,
                                        'lg' => 3,
                                    ]),
                                Forms\Components\DatePicker::make('fecha_nacimiento')
                                    ->required()
                                    ->columnSpan([
                                        'default' => 1,
                                        'sm' => 2,
                                        'lg' => 1,
                                    ]),
                                // END ROW
                                // -----
                                // ROW COL 2
                                Forms\Components\Select::make('tipo_doc')
                                    ->options([
                                        'ti' => 'TI',
                                        'cc' => 'CC',
                                        'ce' => 'CE',
                                        'pasaporte' => 'Pasaporte',
                                    ])
                                    ->label('Tipo de doc.')
                                    ->required()
                                    ->columnSpan([
                                        'default' => 1,
                                        'sm' => 2,
                                        'lg' => 1,
                                    ]),
                                Forms\Components\TextInput::make('no_doc')
                                    ->required()
                                    ->numeric()
                                    ->label('No. de documento')
                                    ->maxLength(15)
                                    ->columnSpan([
                                        'default' => 1,
                                        'sm' => 2,
                                        'lg' => 3,
                                    ]),
                                // END ROW
                            ]),
                    ]),
                // Ubicación
                Forms\Components\Section::make('Ubicación')
                    ->description('Información para localizar al cliente en caso de una emergencia o necesitar un domicilio')
                    ->schema([
                        // GRID CUSTOMER LAYOUT
                        Forms\Components\Grid::make([
                            'default' => 1,
                            'sm' => 4,
                            'md' => 4,
                            'lg' => 4,
                        ])
                            ->schema([
                                // ROW COL 2
                                Forms\Components\TextInput::make('ciudad')
                                    ->required()
                                    ->maxLength(255)
                                    ->columnSpan([
                                        'default' => 1,
                                        'sm' => 2,
                                        'lg' => 2,
                                    ]),
                                Forms\Components\TextInput::make('departamento')
                                    ->required()
                                    ->maxLength(255)
                                    ->columnSpan([
                                        'default' => 1,
                                        'sm' => 2,
                                        'lg' => 2,
                                    ]),
                                // END ROW
                                // -----
                                // ROW COL 1
                                Forms\Components\TextInput::make('direccion')
                                    ->required()
                                    ->maxLength(255)
                                    ->columnSpan(4),
                                // END ROW
                            ]),
                    ]),
                // Contacto
                Forms\Components\Section::make('Contacto')
                    ->description('Información de contacto del cliente')
                    ->schema([
                        // GRID CUSTOMER LAYOUT
                        Forms\Components\Grid::make([
                            'default' => 1,
                            'sm' => 2,
                        ])
                            ->schema([
                                // ROW COL 2
                                Forms\Components\TextInput::make('telefono')
                                    ->maxLength(255)
                                    ->columnSpan([
                                        'default' => 1,
                                        'sm' => 1
                                    ]),
                                Forms\Components\TextInput::make('celular')
                                    ->required()
                                    ->maxLength(255)
                                    ->columnSpan([
                                        'default' => 1,
                                        'sm' => 1
                                    ]),
                                // END ROW
                            ]),
                    ]),
                // Proxima visita al optometra


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre_completo'),
                Tables\Columns\TextColumn::make('tipo_doc')
                    ->label('Tipo Doc')
                    ->getStateUsing(function ($record) {
                        return strtoupper($record->tipo_doc);
                    }),
                Tables\Columns\TextColumn::make('no_doc')
                    ->label('# Documento'),
                // Tables\Columns\TextColumn::make('edad')
                //     ->label('Edad')
                //     ->getStateUsing(function ($record) {
                //         $fechaNacimiento = Carbon::parse($record->fecha_nacimiento);
                //         return $fechaNacimiento->age;
                //     }),
                Tables\Columns\TextColumn::make('ciudad')
                    ->label('Ciudad')
                    ->getStateUsing(function ($record) {
                        return strtoupper($record->ciudad);
                    }),
                Tables\Columns\TextColumn::make('celular')
                    ->label('# Celular'),
                // Tables\Columns\TextColumn::make('direccion')
                // ->label('Dirección'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Fecha creación')
                    ->date(),
            ])
            ->filters([
                // Filter by Doc Type
                SelectFilter::make('tipo_doc')
                    ->options([
                        'cc' => 'CC',
                        'ti' => 'TI',
                        'pasaporte' => 'PASAPORTE',
                    ])->columnSpan(1),
                // Filter by Doc Type
                SelectFilter::make('ciudad')
                    ->options([
                        'cali' => 'CALI',
                        'bogota' => 'BOGOTA',
                        'pereira' => 'PEREIRA',
                    ])->columnSpan(1),
                // Filter by Doc number
                Filter::make('no_doc')
                    ->form([
                        TextInput::make('no_doc')
                            ->label('Número de Documento')
                            ->placeholder('Ingrese el número de documento'),
                    ])
                    ->query(
                        function (Builder $query, array $data): Builder {
                            if ($data['no_doc']) {
                                return $query->where(
                                    'no_doc',
                                    'like',
                                    '%' . $data['no_doc'] . '%',
                                );
                            }

                            return $query;
                        }
                    ),
            ], layout: FiltersLayout::AboveContent)
            ->headerActions([
                TablesExportAction::make()
                ->label('Exportar clientes')
                    ->exports([
                        ExcelExport::make('table')
                            ->fromTable()
                            ->askForWriterType()
                            ->withFilename('pao-informe-clientes-' . date('d-m-y')),
                    ])
                    ], position: HeaderActionsPosition::Bottom)
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make()->requiresConfirmation(),
                ])->icon('heroicon-m-ellipsis-horizontal')
            ], position: ActionsPosition::AfterColumns)
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->requiresConfirmation(),
                    Tables\Actions\BulkAction::make('Cambiar ciudad')
                        ->form([
                            TextInput::make('ciudad')
                                ->placeholder('Ej. Barranquilla')
                        ])
                        ->action(function (array $data, Collection $records){
                            $records->each->cambiarCiudad($data['ciudad']);
                        })->after(function () {
                            return Notification::make()
                                ->title('Ciudades actualizadas con exito')
                                ->success()
                                ->send();
                        })->deselectRecordsAfterCompletion()
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getWidgets(): array
    {
        return [
            ClienteCountWidget::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListClientes::route('/'),
            'create' => Pages\CreateCliente::route('/create'),
            'edit' => Pages\EditCliente::route('/{record}/edit'),
        ];
    }
}

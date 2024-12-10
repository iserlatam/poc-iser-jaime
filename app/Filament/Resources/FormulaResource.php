<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FormulaResource\Pages;
use App\Filament\Resources\FormulaResource\RelationManagers;
use App\Models\Formula;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\RawJs;
use Filament\Tables;
use Filament\Tables\Actions\HeaderActionsPosition;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Blade;
use pxlrbt\FilamentExcel\Actions\Tables\ExportAction as TablesExportAction;
use pxlrbt\FilamentExcel\Columns\Column;
use pxlrbt\FilamentExcel\Exports\ExcelExport;

class FormulaResource extends Resource
{
    protected static ?string $model = Formula::class;

    protected static ?string $navigationIcon = 'heroicon-o-document';

    protected static ?string $activeNavigationIcon = 'heroicon-s-document';

    protected static ?string $navigationGroup = 'Formulas';

    protected static ?string $recordTitleAttribute = 'codigo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make()
                    ->columns(3)
                    ->schema([
                        Forms\Components\TextInput::make('codigo')
                            ->label('Código de esta formula')
                            ->suffixIcon('heroicon-o-finger-print')
                            ->default(fn() => str(Formula::generateRandomCode())->upper())
                            ->disabled(),
                        Forms\Components\Select::make('cliente_id')
                            ->relationship('cliente', 'no_doc')
                            ->label('Número de doc. del cliente')
                            ->searchable()
                            ->required(),
                        Forms\Components\Select::make('doctor_id')
                            ->relationship('doctor', 'no_doc')
                            ->label('Número de doc. del doctor que lo ve')
                            ->searchable()
                            ->required(),
                    ]),
                // DATOS DEL LENTE
                Forms\Components\Tabs::make('Datos del lente')
                    ->columnSpanFull()
                    ->tabs([
                        Forms\Components\Tabs\Tab::make('Ojo izquierdo')
                            ->schema([
                                Forms\Components\Grid::make()
                                    ->columns(3)
                                    ->schema([
                                        Forms\Components\TextInput::make('ojo_izquierdo_esfera')
                                            ->label('Esfera')
                                            ->maxLength(255)
                                            ->default(null),
                                        Forms\Components\TextInput::make('ojo_izquierdo_cilindro')
                                            ->label('Cilindro')
                                            ->maxLength(255)
                                            ->default(null),
                                        Forms\Components\TextInput::make('ojo_izquierdo_eje')
                                            ->label('Eje')
                                            ->maxLength(255)
                                            ->default(null),
                                        Forms\Components\TextInput::make('ojo_izquierdo_av')
                                            ->label('A.V')
                                            ->maxLength(255)
                                            ->default(null),
                                        Forms\Components\TextInput::make('ojo_izquierdo_add')
                                            ->label('A.D.D')
                                            ->maxLength(255)
                                            ->default(null),
                                        Forms\Components\TextInput::make('ojo_izquierdo_dp')
                                            ->label('D.P')
                                            ->maxLength(255)
                                            ->default(null),
                                    ]),
                            ]),
                        Forms\Components\Tabs\Tab::make('Ojo derecho')
                            ->schema([
                                Forms\Components\Grid::make()
                                    ->columns(3)
                                    ->schema([
                                        Forms\Components\TextInput::make('ojo_derecho_esfera')
                                            ->label('Esfera')
                                            ->maxLength(255)
                                            ->default(null),
                                        Forms\Components\TextInput::make('ojo_derecho_cilindro')
                                            ->label('Cilindro')
                                            ->maxLength(255)
                                            ->default(null),
                                        Forms\Components\TextInput::make('ojo_derecho_eje')
                                            ->label('Eje')
                                            ->maxLength(255)
                                            ->default(null),
                                        Forms\Components\TextInput::make('ojo_derecho_av')
                                            ->label('A.V')
                                            ->maxLength(255)
                                            ->default(null),
                                        Forms\Components\TextInput::make('ojo_derecho_add')
                                            ->label('A.D.D')
                                            ->maxLength(255)
                                            ->default(null),
                                        Forms\Components\TextInput::make('ojo_derecho_dp')
                                            ->label('D.P')
                                            ->maxLength(255)
                                            ->default(null),
                                    ]),
                            ]),
                        Forms\Components\Tabs\Tab::make('Tipo de lente')
                            ->schema([
                                Forms\Components\Grid::make()
                                    ->columns(2)
                                    ->schema([
                                        Forms\Components\TextInput::make('tipo_lente')
                                            ->default(null),
                                        Forms\Components\TextInput::make('valor_lente')
                                            ->label('Precio')
                                            ->mask(RawJs::make('$money($input)'))
                                            ->stripCharacters(',')
                                            ->numeric()
                                            ->rules(['regex:/^\d+(\.\d{1,2})?$/'])
                                            ->minValue(0),
                                    ]),
                            ]),
                        Forms\Components\Tabs\Tab::make('Montura')
                            ->schema([
                                Forms\Components\Select::make('montura_id')
                                    ->relationship('montura', 'nombre')
                                    ->searchable()
                                    ->required(),
                            ])
                    ]),
                Forms\Components\Textarea::make('notas_adicionales')
                    ->columnSpanFull(),
                Forms\Components\ToggleButtons::make('cita')
                    ->label('¿Esta formula lleva cita médica')
                    ->boolean()
                    ->inline()
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('codigo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cliente.nombre_completo'),
                Tables\Columns\TextColumn::make('cliente.tipo_doc')
                    ->label('Tipo documento asociado')
                    ->getStateUsing(function ($record) {
                        return strtoupper($record->cliente->tipo_doc);
                    }),
                Tables\Columns\TextColumn::make('cliente.no_doc')
                    ->label('# Documento asociado'),
                // Tables\Columns\TextColumn::make('cita')
                //     ->badge()
                //     ->color(fn(int $state): string => match ($state) {
                //         0 => 'danger',
                //         1 => 'success',
                //     })
                //     ->label('Cita'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Fecha creación')
                    ->date(),
            ])
            ->filters([
                // Filter by Formula Code
                Filter::make('codigo')
                    ->form([
                        TextInput::make('codigo')
                            ->label('Código de formula')
                            ->placeholder('Ingrese el código de la formula'),
                    ])
                    ->query(
                        function (Builder $query, array $data): Builder {
                            if ($data['codigo']) {
                                return $query->where(
                                    'codigo',
                                    'like',
                                    '%' . $data['codigo'] . '%',
                                );
                            }

                            return $query;
                        }
                    ),
            ], layout: FiltersLayout::AboveContent)
            // ->headerActions([
            //     TablesExportAction::make()
            //         ->label('Exportar formulas')
            //         ->exports([
            //             ExcelExport::make()->withColumns([
            //                 Column::make('codigo'),
            //                 Column::make('ojo_izquierdo_esfera'),
            //                 Column::make('ojo_izquierdo_cilindro'),
            //                 Column::make('ojo_izquierdo_eje'),
            //                 Column::make('ojo_izquierdo_av'),
            //                 Column::make('ojo_izquierdo_add'),
            //                 Column::make('ojo_izquierdo_dp'),
            //                 Column::make('ojo_derecho_esfera'),
            //                 Column::make('ojo_derecho_cilindro'),
            //                 Column::make('ojo_derecho_eje'),
            //                 Column::make('ojo_derecho_av'),
            //                 Column::make('ojo_derecho_add'),
            //                 Column::make('ojo_derecho_dp'),
            //                 Column::make('tipo_lente'),
            //                 Column::make('valor_lente'),
            //                 Column::make('cita'),
            //                 Column::make('notas_adicionales'),
            //                 Column::make('cliente_id'),
            //                 Column::make('montura_id'),
            //                 Column::make('doctor_id'),
            //             ])
            //                 ->askForWriterType()
            //                 ->withFilename('pao-informe-formulas-' . date('d-m-y')),
            //         ])
            // ], position: HeaderActionsPosition::Bottom)
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make()->requiresConfirmation(),
                    Tables\Actions\Action::make('PDF')
                        ->label('PDF')
                        ->color('success')
                        ->icon('heroicon-s-arrow-down-tray')
                        ->action(function (Model $record) {
                            return response()->streamDownload(function () use ($record) {
                                // $doc = Pdf::loadView('utils.formulaPdf', ["record" => $record]);
                                // $doc->download("formula_" . $record->codigo . "_" .date('d_m_y'));
                                echo Pdf::loadHtml(
                                    Blade::render('utils.stablePdf', ['record' => $record])
                                )->download();
                            }, "formula_$record->codigo" . "_" . date('dmY') . '.pdf');
                        }),
                ])
                    ->icon('heroicon-m-ellipsis-horizontal')
            ], position: ActionsPosition::AfterColumns)
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->requiresConfirmation(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFormulas::route('/'),
            'create' => Pages\CreateFormula::route('/create'),
            'edit' => Pages\EditFormula::route('/{record}/edit'),
        ];
    }
}

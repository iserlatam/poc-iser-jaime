<?php

namespace App\Filament\Resources\FormulaResource\Pages;

use App\Filament\Resources\FormulaResource;
use App\Filament\Resources\FormulaResource\Widgets\FormulaInformationWidget;
use Filament\Actions;
use Filament\Forms;
use Filament\Resources\Pages\EditRecord;
use Filament\Support\RawJs;
use Joaopaulolndev\FilamentPdfViewer\Forms\Components\PdfViewerField;

class EditFormula extends EditRecord
{
    protected static string $resource = FormulaResource::class;

    public function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make()
                    ->columns(3)
                    ->schema([
                        Forms\Components\TextInput::make('codigo')
                            ->label('Código de esta formula')
                            ->suffixIcon('heroicon-o-finger-print')
                            ->disabled(),
                        Forms\Components\Select::make('cliente_id')
                            ->relationship('cliente', 'no_doc')
                            ->label('Número de doc. del cliente')
                            ->disabled()
                            ->required(),
                        Forms\Components\Select::make('doctor_id')
                            ->relationship('doctor', 'no_doc')
                            ->label('Número de doc. del doctor que lo ve')
                            ->searchable()
                            ->required(),
                    ]),
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

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderWidgets(): array
    {
        return [
            FormulaInformationWidget::class,
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DoctorResource\Pages;
use App\Filament\Resources\DoctorResource\RelationManagers;
use App\Models\Doctor;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DoctorResource extends Resource
{
    protected static ?string $model = Doctor::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';

    protected static ?string $activeNavigationIcon = 'heroicon-s-building-office';

    protected static ?string $navigationGroup = 'Formulas';

    protected static ?string $navigationLabel = 'Doctores';

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
                Forms\Components\Section::make('Información laboral')
                    ->description('Información sobre el estado laboral del doctor dentro de la empresa')
                    ->schema([
                        Forms\Components\Grid::make()
                            ->columns(3)
                            ->schema([
                                Forms\Components\TextInput::make('horario')
                                    ->label('Label')
                                    ->maxLength(255)
                                    ->default(null),
                                Forms\Components\TextInput::make('tipo_contrato')
                                    ->label('Tipo de Contrato')
                                    ->maxLength(255)
                                    ->default(null),
                                Forms\Components\TextInput::make('an_exp')
                                    ->label('Años de experiencia')
                                    ->maxLength(255)
                                    ->default(null),
                                Forms\Components\TextInput::make('area')
                                    ->label('Área')
                                    ->maxLength(255)
                                    ->default(null),
                                Forms\Components\TextInput::make('profesion')
                                    ->label('Profesión')
                                    ->maxLength(255)
                                    ->columnSpan(2)
                                    ->default(null),
                            ])
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre_completo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tipo_doc')
                    ->label('Tipo Documento')
                    ->getStateUsing(function ($record) {
                        return strtoupper($record->tipo_doc);
                    }),
                Tables\Columns\TextColumn::make('no_doc')
                    ->label('# Documento'),
                Tables\Columns\TextColumn::make('profesion'),
                Tables\Columns\TextColumn::make('an_exp')
                    ->label('Años experiencia')
                    ->searchable(),
                Tables\Columns\TextColumn::make('direccion')
                    ->searchable(),
                Tables\Columns\TextColumn::make('celular')
                    ->label('# Celular')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->date()
                    ->label('Fecha creación')
            ])
            ->filters([
                // Filter by Doc Type
                SelectFilter::make('tipo_doc')
                    ->options([
                        'cc' => 'CC',
                        'ti' => 'TI',
                        'pasaporte' => 'PASAPORTE',
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
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListDoctors::route('/'),
            'create' => Pages\CreateDoctor::route('/create'),
            'edit' => Pages\EditDoctor::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Pages;

use Filament\Forms;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;

class Dashboard extends \Filament\Pages\Dashboard
{
    use HasFiltersForm;

    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static ?string $activeNavigationIcon = 'heroicon-s-home';

    public function filtersForm(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            // Forms\Components\Section::make('Búsqueda rápida')
            //     ->schema([
            //         Forms\Components\Grid::make()
            //             ->schema([
            //                 Forms\Components\TextInput::make('no_doc')
            //                     ->label('# Documento'),
            //                 Forms\Components\TextInput::make('codigo')
            //                     ->label('Código formula'),
            //                 // Forms\Components\DatePicker::make('startDate'),
            //                 // Forms\Components\DatePicker::make('endDate'),
            //             ])
            //             ->columns(2),
            //         Forms\Components\Toggle::make('active'),
            //             ]),
        ]);
    }

    public function getColumns(): int | string | array
    {
        return 2;
    }
}

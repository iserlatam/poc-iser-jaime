<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MonturaResource\Pages;
use App\Filament\Resources\MonturaResource\RelationManagers;
use App\Helpers\SvgHelper;
use App\Models\Montura;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\RawJs;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MonturaResource extends Resource
{
    protected static ?string $model = Montura::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    protected static ?string $activeNavigationIcon = 'heroicon-s-shopping-bag';

    protected static ?string $navigationGroup = 'Productos';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')
                    ->required(),
                Forms\Components\TextInput::make('precio')
                    ->label('Precio')
                    ->mask(RawJs::make('$money($input)'))
                    ->stripCharacters(',')
                    ->numeric()
                    ->required()
                    ->rules(['regex:/^\d+(\.\d{1,2})?$/'])
                    ->minValue(0),
                Forms\Components\Select::make('fabricante_id')
                    ->relationship('fabricante', 'nombre')
                    ->searchable()
                    ->required(),
                Forms\Components\TextInput::make('color')
                    ->required(),
                Forms\Components\Select::make('genero')
                    ->options([
                        'masculino' => 'Masculino',
                        'femenino' => 'Femenino',
                        'unisex' => 'Unisex'
                    ])
                    ->required(),
                Forms\Components\ToggleButtons::make('garantia')
                    ->label('¿Esta montura cuenta con garantia?')
                    ->boolean()
                    ->inline()
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('precio')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('fabricante.nombre')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
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
            'index' => Pages\ListMonturas::route('/'),
            'create' => Pages\CreateMontura::route('/create'),
            'edit' => Pages\EditMontura::route('/{record}/edit'),
        ];
    }
}

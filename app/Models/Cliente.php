<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cliente extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre_completo',
        'tipo_doc',
        'no_doc',
        'fecha_nacimiento',
        'ciudad',
        'departamento',
        'direccion',
        'telefono',
        'celular',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fecha_nacimiento' => 'timestamp',
    ];

    public function cambiarCiudad($newCiudad)
    {
        $this->ciudad = $newCiudad;
        $this->update();
    }

    public function formulas(): HasMany
    {
        return $this->hasMany(Formula::class);
    }
}

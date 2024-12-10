<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Montura extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'precio',
        'fabricante_id',
        'color',
        'genero',
        'garantia',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fabricante_id' => 'integer',
    ];

    public function fabricante(): BelongsTo
    {
        return $this->belongsTo(Fabricante::class);
    }

    public function formulas(): HasMany
    {
        return $this->hasMany(Formula::class);
    }
}

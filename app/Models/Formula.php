<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Str;

class Formula extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->codigo = static::generateRandomCode();
        });
    }

    public static function generateRandomCode()
    {
        $letters = strtolower(Str::random(3));
        $numbers = random_int(100, 999);
        return "{$letters}-{$numbers}";
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'codigo',
        'ojo_izquierdo_esfera',
        'ojo_izquierdo_cilindro',
        'ojo_izquierdo_eje',
        'ojo_izquierdo_av',
        'ojo_izquierdo_add',
        'ojo_izquierdo_dp',
        'ojo_derecho_esfera',
        'ojo_derecho_cilindro',
        'ojo_derecho_eje',
        'ojo_derecho_av',
        'ojo_derecho_add',
        'ojo_derecho_dp',
        'tipo_lente',
        'valor_lente',
        'cita',
        'notas_adicionales',
        'cliente_id',
        'montura_id',
        'doctor_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ojo_izquierdo_esfera' => 'integer',
        'ojo_izquierdo_cilindro' => 'integer',
        'ojo_izquierdo_eje' => 'integer',
        'ojo_izquierdo_av' => 'integer',
        'ojo_izquierdo_add' => 'integer',
        'ojo_izquierdo_dp' => 'integer',
        'ojo_derecho_esfera' => 'integer',
        'ojo_derecho_cilindro' => 'integer',
        'ojo_derecho_eje' => 'integer',
        'ojo_derecho_av' => 'integer',
        'ojo_derecho_add' => 'integer',
        'ojo_derecho_dp' => 'integer',
        'cita' => 'boolean',
        'cliente_id' => 'integer',
        'montura_id' => 'integer',
        'doctor_id' => 'integer',
    ];

    public function cliente(): BelongsTo
    {
        return $this->belongsTo(Cliente::class);
    }

    public function montura(): BelongsTo
    {
        return $this->belongsTo(Montura::class);
    }

    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }

    public function factura(): HasOne
    {
        return $this->hasOne(Factura::class);
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Montura;
use App\Models\Doctor;
use App\Models\Cliente;
use App\Models\Formula;

class FormulaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Formula::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'codigo' => Formula::generateRandomCode(),
            'ojo_izquierdo_esfera' => $this->faker->numberBetween(10,80),
            'ojo_izquierdo_cilindro' => $this->faker->numberBetween(10,80),
            'ojo_izquierdo_eje' => $this->faker->numberBetween(10,80),
            'ojo_izquierdo_av' => $this->faker->numberBetween(10,80),
            'ojo_izquierdo_add' => $this->faker->numberBetween(10,80),
            'ojo_izquierdo_dp' => $this->faker->numberBetween(10,80),
            'ojo_derecho_esfera' => $this->faker->numberBetween(10,80),
            'ojo_derecho_cilindro' => $this->faker->numberBetween(10,80),
            'ojo_derecho_eje' => $this->faker->numberBetween(10,80),
            'ojo_derecho_av' => $this->faker->numberBetween(10,80),
            'ojo_derecho_add' => $this->faker->numberBetween(10,80),
            'ojo_derecho_dp' => $this->faker->numberBetween(10,80),
            'tipo_lente' => 'policarbonato',
            'valor_lente' => $this->faker->numberBetween(120000, 900000),
            'cita' => $this->faker->randomElement([0, 1]),
            'notas_adicionales' => 'Tener cuidado al limpiar los lentes',
            'cliente_id' => Cliente::factory(),
            'montura_id' => Montura::factory(),
            'doctor_id' => Doctor::factory(),
        ];
    }
}

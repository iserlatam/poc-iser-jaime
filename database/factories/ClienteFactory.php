<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Cliente;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nombre_completo' => $this->faker->name(),
            'tipo_doc' => $this->faker->randomElement(["ti","cc","ce","pasaporte"]),
            'no_doc' => $this->faker->numberBetween(1111111, 9999999),
            'fecha_nacimiento' => $this->faker->dateTime(),
            'ciudad' => 'bogota',
            'departamento' => 'cundinamarca',
            'direccion' => $this->faker->address(),
            'telefono' => $this->faker->phoneNumber(),
            'celular' => $this->faker->phoneNumber(),
        ];
    }
}

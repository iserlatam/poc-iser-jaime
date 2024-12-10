<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Fabricante;
use App\Models\Montura;

class MonturaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Montura::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->randomElement(['piramidal', 'oblongo', 'ovalado', 'redondo', 'cuadrado', 'romboide', 'triangular']),
            'precio' => $this->faker->numberBetween(70000, 500000),
            'fabricante_id' => Fabricante::factory(),
            'color' => $this->faker->colorName(),
            'genero' => $this->faker->randomElement(["femenino", "masculino", "unisex"]),
            'garantia' => $this->faker->randomElement(['3 meses', '6 meses', '1 año', '2 años']),
        ];
    }
}

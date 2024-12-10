<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Factura;
use App\Models\Formula;

class FacturaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Factura::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'formula_id' => Formula::factory(),
            'cantidad' => $this->faker->word(),
            'fecha' => $this->faker->dateTime(),
            'total' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //'titulo' => $this->faker->name(),
            'titulo' =>  $this->faker->randomElement(['Ibuprofeno', 'paracetamol', 'aspirina']),
            'descripcion' => $this->faker->randomElement(['Alivia dólares musculares', 'Para gripe','Para dolores de cabeza']),
            'precioU' => $this->faker->numberBetween(1, 100),
            'precioV' => $this->faker->numberBetween(1, 100),
            'cantidadP' => $this->faker->numerify(),
        ];
    }
}

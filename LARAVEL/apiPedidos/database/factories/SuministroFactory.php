<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Suministro>
 */
class SuministroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'numPedido' => $this->faker->unique()->bothify('PED-####'),
            'nombre' => $this->faker->words(3, true),
            'precio' => $this->faker->randomFloat(2, 1, 100),
            'categoria' => $this->faker->randomElement([
    'bebidas',
    'entrantes',
    'primeros platos',
    'segundos platos',
    'postres'
]),
            'detalles' => $this->faker->sentence(),
            'ingredientes' => $this->faker->words(5, true),
            'marca' => $this->faker->company(),
            'fechaCaducidad' => $this->faker->dateTimeBetween('now', '+1 year'),
            'fechaAlta' => $this->faker->date(),
            'cantidad' => $this->faker->numberBetween(1, 100),
        ];
    }
}

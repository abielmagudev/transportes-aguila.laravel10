<?php

namespace Database\Factories;

use App\Models\OrigenDestino;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrigenDestino>
 */
class OrigenDestinoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => sprintf('%s #%d', $this->faker->unique(true)->company(), mt_rand(1, 256)),
            'rfc' => $this->faker->unique(true)->uuid(),
            'direccion' => $this->faker->address(),
            'calle' => $this->faker->streetName(),
            'numero_exterior' => $this->faker->randomDigit(),
            'numero_interior' => $this->faker->randomDigit(),
            'codigo_postal' => $this->faker->postcode(),
            'pais' => $this->faker->randomElement( OrigenDestino::getClavesPaisesPredeterminados() ),
            'estado' => $this->faker->randomElement(['tamaulipas', 'sonora', 'nuevo leon', 'coahuila', 'estado de mexico']),
            'ciudad' => $this->faker->city(),
        ];
    }
}

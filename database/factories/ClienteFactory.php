<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->unique(true)->company(),
            'rfc' => $this->faker->unique(true)->uuid(),
            'direccion' => $this->faker->streetAddress(),
            'numero_exterior' => $this->faker->optional()->numberBetween(1,999),
            'numero_interior' => $this->faker->optional()->numberBetween(1,999),
            'colonia' => $this->faker->optional()->streetName(),
            'codigo_postal' => $this->faker->postcode(),
            'ciudad' => $this->faker->city(),
            'estado' => $this->faker->state(),
            'pais' => $this->faker->randomElement( Cliente::getClavesPaisesPredeterminados() ),
            'cuenta_bancaria' => $this->faker->optional()->creditCardNumber(),
            'moneda' => $this->faker->randomElement( config('aplicacion.tipos_moneda') ),
            'regimen_fiscal' => (explode(' ', $this->faker->userAgent()))[0],
            'retencion' => $this->faker->boolean(),
            'tipo_pago' => $this->faker->randomElement( config('aplicacion.tipos_pago') ),
            'tasa_iva' => $this->faker->randomElement(['4', '8', '12', '16']),
            'cuenta_contable' => $this->faker->iban(),
        ];
    }
}

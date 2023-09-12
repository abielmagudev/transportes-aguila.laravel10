<?php

namespace Database\Factories;

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
            'numero_exterior' => $this->faker->randomDigit(),
            'numero_interior' => $this->faker->randomDigit(),
            'colonia' => $this->faker->streetName(),
            'codigo_postal' => $this->faker->postcode(),
            'ciudad' => $this->faker->city(),
            'estado' => $this->faker->state(),
            'pais' => $this->faker->country(),
            'cuenta_banco' => $this->faker->creditCardNumber(),
            'moneda' => $this->faker->randomElement(['peso', 'dollar', 'quetzal']),
            'regimen_fiscal' => $this->faker->userAgent(),
            'retencion_cuatro_porciento' => $this->faker->boolean(),
            'tipo_pago' => $this->faker->randomElement(['cheque', 'efectivo', 'transferencia']),
            'tasa_iva' => $this->faker->randomElement(['4', '8', '12', '16']),
            'cuenta_contable' => $this->faker->iban(),
        ];
    }
}

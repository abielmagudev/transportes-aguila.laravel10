<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Propietario;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            ClienteSeeder::class,
            LineaAmericanaSeeder::class,
            OrigenDestinoSeeder::class,
            PropietarioSeeder::class,
            RutaSeeder::class,
            TipoRemolqueSeeder::class,
            UserSeeder::class,
        ]);
    }
}

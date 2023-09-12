<?php

namespace Database\Seeders;

use App\Models\OrigenDestino;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrigenDestinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OrigenDestino::factory(256)->create();
    }
}

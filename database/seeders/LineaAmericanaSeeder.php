<?php

namespace Database\Seeders;

use App\Models\LineaAmericana;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LineaAmericanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LineaAmericana::factory(10)->create();
    }
}

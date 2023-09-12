<?php

namespace Database\Seeders;

use App\Models\TipoRemolque;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoRemolqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoRemolque::factory(3)->create();
    }
}

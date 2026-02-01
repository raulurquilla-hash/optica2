<?php

namespace Database\Seeders;

use App\Models\Examen;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ExamenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Examen::factory(10)->create(); // Crea 10 examenes falsos [7]
    }
}

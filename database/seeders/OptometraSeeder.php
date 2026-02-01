<?php

namespace Database\Seeders;

use App\Models\Optometra;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OptometraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Optometra::factory(10)->create();
       \App\Models\Optometra::factory(10)->create(); // Crea 10 usuarios falsos [7]
    }
}

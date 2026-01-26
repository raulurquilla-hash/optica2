<?php

namespace Database\Seeders;

// use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Paciente;
use App\Models\Optometra;
use Illuminate\Database\Seeder;
use Database\Seeders\OptometrasSeeder;
use Database\Seeders\PacientesSeeder;

class DatabaseSeeder extends Seeder

{ 
    

    /**
     * Seed the application's database.
     * 
     */
     public function run(): void
    {
        App\Database\Seeders\OptometrasSeeder::factory(10)->create();
        App\Database\Seeders\PacientesSeeder::factory(50)->create();
        
    }


}

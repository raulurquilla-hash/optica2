<?php

namespace Database\Seeders;

// use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Paciente;
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
       Paciente::factory(50)->create();
        
    }


}

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
        
       
        \App\Models\Optometra::factory(10)->create();
        \App\Models\Phone::factory(10)->create();
        \App\Models\Paciente::factory(15)->create();
        \App\Models\Examen::factory(15)->create();
    }


}

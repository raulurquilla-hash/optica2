<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Optometra>
 */
class OptometraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nombre1 = $this->faker->firstName();
        $nombre2 = $this->faker->firstName();
        $apellidoP = $this->faker->lastName();
        $apellidoM = $this->faker->lastName();    
               
        
        return [
            'nombre_1' => $nombre1,
            'nombre_2' => $nombre2,
            'apellido_p' => $apellidoP,
            'apellido_m' => $apellidoM,
            'licencia' => $this->faker->unique()->numerify('##########'),
            ];
        
    }
}

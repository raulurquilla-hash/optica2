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
            'nombre1' => $nombre1,
            'nombre2' => $nombre2,
            'apellidop' => $apellidoP,
            'apellidom' => $apellidoM,
            'licencia' => $this->faker->unique()->numerify('##########'),
        ];
        
    }
}

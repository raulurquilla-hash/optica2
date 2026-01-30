<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Examen>
 */
class ExamenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'paciente_id' => \App\Models\Paciente::factory(),
            'optometra_id' => \App\Models\Optometra::factory(),
            'rx_od' => '0.00',
            'rx_oi' => '0.00',
            'esfera_od' => '0.00',
            'esfera_oi' => '0.00',
            'cilindro_od' => '0.00',
            'cilindro_oi' => '0.00',
            'eje_od' => '0',
            'eje_oi' => '0',
            'base_od' => '0',
            'base_oi' => '0',
            'add' => '0.00',
            'lensometria' => $this->faker->text(50),
            'agudeza_sl' => '20/20',
            'agudeza_cc' => '20/20',
            'rx' => $this->faker->text(50),
            'fecha_examen' => $this->faker->date(),
            'resultados' => $this->faker->text(100),
            'observaciones' => $this->faker->text(100),
        ];
    }
}

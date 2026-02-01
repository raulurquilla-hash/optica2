<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    /** @use HasFactory<\Database\Factories\ExamenFactory> */
    use HasFactory;

    protected $fillable = [
        'optometra_id',
        'paciente_id',
        'rx_od',
        'rx_oi',
        'esfera_od',
        'esfera_oi',
        'cilindro_od',
        'cilindro_oi',
        'eje_od',
        'eje_oi',
        'base_od',
        'base_oi',
        'base_add',
        'lensometria',
        'agudeza_sl',
        'agudeza_cc',
        'rx',
        'fecha_examen',
        'resultados',
        'observaciones',
    ];

    //Relacion con el modelo Paciente
    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}

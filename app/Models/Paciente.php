<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Iluminate\Database\Eloquent\Relations\BelongsTo;

class Paciente extends Model
{
    /** @use HasFactory<\Database\Factories\PacienteFactory> */
    use HasFactory;

    protected $fillable = [
        'optometra_id',
        'fecha_consulta',
        'dui',
        'nombre1',
        'nombre2',
        'apellidoP',
        'apellidoM',
        'fecha_nacimiento',
        'edad',
        'genero',
        'telefono',
        'direccion',
        'expediente_medico',
    ];

    // Relación con el modelo Optometra
    public function optometra()
    {
        return $this->belongsTo(Optometra::class);
    }
}
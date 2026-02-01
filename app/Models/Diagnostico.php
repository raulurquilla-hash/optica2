<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
    /** @use HasFactory<\Database\Factories\DiagnosticoFactory> */
    use HasFactory;

    protected $fillable = [
        'examen_id',
        'descripcion',
        'tratamiento',
        'fecha_diagnostico',
        'observaciones',
    ];

    // Relación con el modelo Examen
    public function examen()
    {
        return $this->belongsTo(Examen::class);
    }   
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Phone;
use App\Models\Paciente;

class Optometra extends Model
{
    /** @use HasFactory<\Database\Factories\OptometraFactory> */
    use HasFactory;

    //Relationships

   public function phone():HasOne
   {
       return $this->hasOne(Phone::class);
   } 

   public function pacientes():HasMany
    {
         return $this->hasMany(Paciente::class);
    }   

   
}

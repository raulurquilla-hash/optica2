<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Iluminate\Database\Eloquent\Relations\BelongsTo;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Optometra::class);
            $table->date('fecha_consulta');
            $table->string('dui', 11)->unique();
            $table->string('nombre1', 55);
            $table->string('nombre2', 55);
            $table->string('apellidoP', 55);
            $table->string('apellidoM', 55);
            $table->date('fecha_nacimiento');
            $table->string('edad', 3);
            $table->enum('genero', ['Masculino', 'Femenino']);
            $table->string('telefono', 20);
            $table->text('direccion');
            $table->string('expediente_medico', 50)->unique();  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};

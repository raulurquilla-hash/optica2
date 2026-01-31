<?php

use App\Models\Paciente;
use App\Models\Optometra;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\Relations\BelongsTo; 

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('examens', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Paciente::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Optometra::class)->constrained()->cascadeOnDelete();
            $table->string('rx_od');
            $table->string('rx_oi');
            $table->string('esfera_od');
            $table->string('esfera_oi');
            $table->string('cilindro_od');
            $table->string('cilindro_oi');
            $table->string('eje_od');
            $table->string('eje_oi');
            $table->string('base_od');
            $table->string('base_oi');
            $table->string('add');
            $table->text('lensometria');
            $table->string('agudeza_sl');
            $table->string('agudeza_cc');
            $table->text('rx');
            $table->date('fecha_examen');
            $table->text('resultados');
            $table->text('observaciones');
            $table->timestamps();
        });
    }
//examens_paciente_id_foreign` foreign key (`paciente_id`) references `pacientes` (`id`) on delete cascade)
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examens');
    }
};

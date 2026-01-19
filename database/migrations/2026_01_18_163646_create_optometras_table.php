<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('optometras', function (Blueprint $table) {
            $table->id();
            $table->string('nombre1', 55);
            $table->string('nombre2', 55)->nullable();
            $table->string('apellidop', 55);
            $table->string('apellidom', 55)->nullable();
            $table->string('licencia', 50)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('optometras');
    }
};

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
        Schema::create('calificaciones', function (Blueprint $table) {
            // Creando columnas
            $table->float('calificacion_total');

            // Creando llave primaria
            $table->primary(['user_id', 'materia_id']);

            // Creando llaves foraneas
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('materia_id')->constrained('materia');

            // Creando indices
            $table->index('user_id');
            $table->index('materia_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calificaciones');
    }
};

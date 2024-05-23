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
        Schema::create('profesor_materias', function (Blueprint $table) {
            // Creando columnas
            // $table->unsignedInteger('profesor_id');
            // $table->unsignedInteger('materia_id');

            // Creando llave primaria
            $table->primary(['profesor_id', 'materia_id']);

            // Creando llaves foraneas
            $table->foreignId('profesor_id')->constrained('profesores');
            $table->foreignId('materia_id')->constrained('materia');

            // Creando indices
            $table->index('profesor_id');
            $table->index('materia_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profesor_materias');
    }
};

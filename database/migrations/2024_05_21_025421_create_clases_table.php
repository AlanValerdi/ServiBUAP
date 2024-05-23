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
        Schema::create('clases', function (Blueprint $table) {
            
            // Creando llave primaria
            $table->primary(['user_id', 'materia_id', 'profesor_id']);
            
            // Creando llaves foraneas
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('materia_id')->constrained('materia');
            $table->foreignId('profesor_id')->constrained('profesores');

            //Creando indices
            $table->index('user_id');
            $table->index('materia_id');
            $table->index('profesor_id');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clases');
    }
};

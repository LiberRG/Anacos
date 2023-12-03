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
        Schema::create('encuesta_respuestas', function (Blueprint $table) {
            $table->id();
            $table->string('pregunta1', 60)->nullable();
            $table->string('pregunta2', 60)->nullable();
            $table->string('pregunta3', 60)->nullable();
            $table->string('pregunta4', 60)->nullable();
            $table->string('pregunta5', 60)->nullable();
            $table->string('pregunta6', 60)->nullable();
            $table->string('pregunta7', 60)->nullable();
            $table->string('pregunta8', 60)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encuesta_respuestas');
    }
};

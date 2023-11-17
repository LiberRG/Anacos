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
        Schema::create('restaurantes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('imagen_id')->nullable();
            $table->integer('telefono')->nullable();
            $table->string('email')->nullable();
            $table->string('web')->nullable();
            $table->string('direccion')->nullable();
            $table->string('descripcion')->nullable();
            $table->decimal('puntuacion')->nullable();
            $table->string('detalles')->nullable();
            $table->foreignId('lugar_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurantes');
    }
};

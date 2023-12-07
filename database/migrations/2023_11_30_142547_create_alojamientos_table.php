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
        Schema::create('alojamientos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('imagen_id')->nullable();
            $table->string('nombre', 60)->nullable();
            $table->string('telefono', 14)->nullable();
            $table->string('email')->nullable();
            $table->string('web', 120)->nullable();
            $table->string('direccion', 120)->nullable();
            $table->string('descripcion', 300)->nullable();
            $table->float('puntuacion')->nullable();
            $table->string('detalles', 600)->nullable();
            $table->foreignId('lugar_id');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alojamientos');
    }
};

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
        Schema::create('paisajes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('imagen_id')->nullable();
            $table->string('nombre', 60)->nullable();
            $table->string('direccion', 120)->nullable();
            $table->string('descripcion', 300)->nullable();
            $table->string('detalles', 800)->nullable();
            $table->foreignId('lugar_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paisajes');
    }
};

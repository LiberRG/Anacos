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
        Schema::create('emparejas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('imagen_id');
            $table->string('rutaImg', 120);
            $table->string('descripcion',800);
            $table->string('titulo', 60);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emparejas');
    }
};

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
        Schema::create('lugars', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 60);
            $table->enum('provincia', ['Pontevedra','A Coruña', 'Ourense', 'Lugo']);
            $table->float('posicionTop');
            $table->float('posicionLeft');
            $table->string('rutaMapa', 120);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lugars');
    }
};

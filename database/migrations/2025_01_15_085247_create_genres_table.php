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
        Schema::create('genres', function (Blueprint $table) {
            $table->id();
            //asegura que no puede haber dos géneros con el mismo nombre.
            $table->string('name')->unique();
            //Laravel crea automáticamente dos columnas (created_at y updated_at) para llevar un registro de cuándo se creó o actualizó el género.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('genres');
    }
};

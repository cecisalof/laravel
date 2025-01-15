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
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('artist', 255);
            $table->year('release_year');
            $table->enum('status', ['nuevo', 'usado', 'colección']);
            $table->decimal('price', 8, 2);
            $table->string('cover_image', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * el método down() elimina todas las tablas creadas en el método up() para revertir los cambios si es necesario.
     */
    public function down(): void
    {
        Schema::dropIfExists('records');
    }
};

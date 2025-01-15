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
        Schema::create('genre_record', function (Blueprint $table) {
            $table->id();
            /* Clave foránea que hace referencia al id de la tabla genres.
            * onDelete('cascade'): Asegura que, si se elimina un Genre o un Record, 
            * los registros correspondientes en la tabla pivot también se eliminen automáticamente.
            */
            $table->foreignId('genre_id')->constrained()->onDelete('cascade');
            // Clave foránea que hace referencia al id de la tabla records.
            $table->foreignId('record_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('genre_record');
    }
};

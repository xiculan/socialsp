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
 
Schema::create('programs', function (Blueprint $table) {
        $table->id();
        $table->string('title'); // Ej: "Dejar de fumar en 30 días"
        $table->text('description');
        $table->string('category'); // Ej: "Adicciones", "Habilidades Sociales"
        $table->timestamps();



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};

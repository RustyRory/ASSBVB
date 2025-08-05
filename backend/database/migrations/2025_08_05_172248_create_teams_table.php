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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();

            $table->string('name');         // Nom de l’équipe
            $table->string('category');     // U15, U18, Senior, etc.
            $table->year('season');         // Année de la saison (ex: 2025-26)
            $table->text('description')->nullable(); // Présentation (facultatif)

            $table->timestamps();           // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};

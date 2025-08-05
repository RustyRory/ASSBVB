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
        Schema::create('players', function (Blueprint $table) {
            $table->id();

            $table->foreignId('team_id')
                ->constrained()
                ->onDelete('cascade'); // Supprime les joueurs si l’équipe est supprimée

            $table->string('name');         // Nom du joueur
            $table->string('position');     // Exemple : passeur, attaquant
            $table->unsignedInteger('number')->nullable(); // Numéro (facultatif)
            $table->string('photo')->nullable(); // URL ou chemin vers la photo

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};

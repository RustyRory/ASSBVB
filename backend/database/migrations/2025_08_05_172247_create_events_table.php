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
        Schema::create('events', function (Blueprint $table) {
            $table->id();

            $table->string('title');                       // Titre de l'événement
            $table->enum('type', ['match', 'tournoi', 'admin', 'autre']);
            $table->string('category')->nullable();        // Ex: "Coupe de France", "Assemblée générale"
            $table->dateTime('date');                      // Date/heure de l'événement
            $table->string('location')->nullable();        // Lieu (optionnel)
            $table->text('description')->nullable();       // Description libre
            $table->json('photos')->nullable();            // Galerie de photos (array d'URLs ou paths)

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
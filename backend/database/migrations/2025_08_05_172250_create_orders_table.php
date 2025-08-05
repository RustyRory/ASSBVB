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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            // Lien optionnel vers un utilisateur (nullable si achat anonyme)
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null');

            // Statut de la commande
            $table->enum('status', ['en_cours', 'payé', 'annulé'])->default('en_cours');

            // Total calculé côté backend
            $table->decimal('total_price', 10, 2);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

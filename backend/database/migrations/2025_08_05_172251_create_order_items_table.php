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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();

            // Clé étrangère vers 'orders' (nullable si tu veux garder les lignes orphelines)
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');

            // Clé étrangère vers 'products'
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');

            $table->integer('quantity');
            $table->decimal('unit_price', 8, 2); // Exemple : 99.99 max

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};

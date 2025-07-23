<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Crée la table 'commandes'.
     */
    public function up(): void
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stand_id')->constrained()->onDelete('cascade'); // Lien avec le stand
            $table->json('produits'); // Liste des produits commandés au format JSON
            $table->string('nom_client')->nullable(); // Informations du client
            $table->string('telephone')->nullable();
            $table->timestamp('date_commande')->useCurrent(); // Date automatique
            $table->timestamps(); // created_at et updated_at
        });
    }

    /**
     * Supprime la table 'commandes' si elle existe.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};

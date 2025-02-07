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
        Schema::create('add_computers', function (Blueprint $table) {
            $table->id();
            $table->string('marque');
            $table->string('modele');
            $table->string('processeur'); // en Go
            $table->string('cpu'); // en Go ou To (ajustable selon les besoins)
            $table->string('core'); 
            $table->string('ram')->nullable(); // SSD, HDD
            $table->string('type_stockage')->nullable(); // SSD, HDD
            $table->string('capacite_stockage')->nullable();
            $table->float('taille_ecran')->nullable(); // en pouces
    
            $table->string('clavier')->nullable(); // Clavier Azerty/Qwerty, etc.

            $table->string('carte_graphique')->nullable(); 
          
           $table->string('memoire_video')->nullable(); 
           $table->integer('ecran_tactile')->nullable(); 
           $table->integer('generation')->nullable(); 
            $table->string('autonomie')->nullable(); 
            $table->decimal('prix', 10, 2); 
            $table->string('photo')->nullable(); // Chemin vers l'image
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_computers');
    }
};

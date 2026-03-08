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
        Schema::create('project_technology', function (Blueprint $table) {
            $table->id();

            $table->foreignId("project_id")->constrained()->onDelete("cascade");
            $table->foreignId("technology_id")->constrained()->onDelete("cascade");
            //il metodo onDelete("cascade"): senza questo se provassimo a cancellare un progetto avremmo errore perchè trova la dipendenza con le technologies; 
            //invece se lo usiamo, quando vogliamo cancellare un progetto il db va prima nella tabella pivot ed elimina le righe con project_id e poi permette di cancellare il progetto. 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_technology');
    }
};

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
        Schema::table('projects', function (Blueprint $table) {

            //uso la forma contratta di Laravel per creare la relazione tra projects e types tables
            $table->foreignId("type_id")->nullable()->after("project_name")->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            //prima elimino il vincolo del constrained() 
            $table->dropForeign("projects_type_id_foreign");

            //cancello la colonna
            $table->dropColumn("type_id");
        });
    }
};

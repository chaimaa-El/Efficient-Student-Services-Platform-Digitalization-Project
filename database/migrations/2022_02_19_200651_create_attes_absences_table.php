<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttesAbsencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attes_absences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nom_Etudiant');
            $table->string('Prenom_Etudiant');
            $table->string('CNE');
            $table->string('Niveau');
            $table->string('Filière');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attes_absences');
    }
}

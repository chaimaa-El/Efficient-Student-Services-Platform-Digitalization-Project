<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dem_stages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nom_Etudiant');
            $table->string('Prenom_Etudiant');
            $table->string('CNE');
            $table->string('Filière');
            $table->string('Période');
            $table->string('Email');
            $table->string('Téléphone');
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
        Schema::dropIfExists('dem_stages');
    }
}

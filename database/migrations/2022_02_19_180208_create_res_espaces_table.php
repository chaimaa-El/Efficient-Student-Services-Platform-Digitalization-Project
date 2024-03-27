<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResEspacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('res_espaces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nom_Representant');
            $table->string('CNE_Representant');
            $table->string('Niveau_Representant');
            $table->string('Email_Representant');
            $table->string('Téléphone_Representant');
            $table->string('Event');
            $table->string('Date');
            $table->string('Durée');
            $table->string('Public');
            $table->string('Espace');
            $table->string('Equipements');
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
        Schema::dropIfExists('res_espaces');
    }
}

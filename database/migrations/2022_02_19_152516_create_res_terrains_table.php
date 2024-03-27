<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResTerrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('res_terrains', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nom_Representant');
            $table->string('CNE_Representant');
            $table->string('Niveau_Representant');
            $table->string('Email_Representant');
            $table->string('Téléphone_Representant');
            $table->string('Date');
            $table->string('Horaires');
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
        Schema::dropIfExists('res_terrains');
    }
}

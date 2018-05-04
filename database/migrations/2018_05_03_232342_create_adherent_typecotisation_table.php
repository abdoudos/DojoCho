<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdherentTypecotisationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adherent_typecotisation', function (Blueprint $table) {
            $table->increments('id');
            $table->date('dateCotisation');
            $table->timestamps();
            // lien vers la adherent
            $table->integer('adherent_id')->unsigned();
            $table->foreign('adherent_id')->references('id')->on('adherents');
            //lien vers l'instructeur
            $table->integer('typecotisation_id')->unsigned();
            $table->foreign('typecotisation_id')->references('id')->on('typecotisations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adherent_typecotisation');
    }
}

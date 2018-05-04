<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdherentGroupeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adherent_groupe', function (Blueprint $table) {
            //cel-ci represent une relation entre l'adherent et le groupe 
            //et ca montre q'un adherent apartient a un groupe dans une date
            $table->increments('id');
            $table->date('date');
            $table->timestamps();
            //lien vers  adherents
            $table->integer('adherent_id')->unsigned();
            $table->foreign('adherent_id')->references('id')->on('adherents');
            //lien vers groupes
            $table->integer('groupe_id')->unsigned();
            $table->foreign('groupe_id')->references('id')->on('groupes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adherent_groupe');
    }
}

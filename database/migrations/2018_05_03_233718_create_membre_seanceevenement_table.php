<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembreSeanceevenementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membre_seanceevenement', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            // lien vers la members
            $table->integer('member_id')->unsigned();
            $table->foreign('member_id')->references('id')->on('members');
            //lien vers seancesevenements
            $table->integer('seanceevenement_id')->unsigned();
            $table->foreign('seanceevenement_id')->references('id')->on('seancesevenements');
            //$table->primary(member_id,seanceevenement_id);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membre_seanceevenement');
    }
}

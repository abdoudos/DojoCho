<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeancesevenementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seancesevenements', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->time('heureDebut');
            $table->time('heureFin');
            $table->integer('durre');// la durre d'une seance en minute par ex:90mn
            $table->string('informationAbout');
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
        Schema::dropIfExists('seancesevenements');
    }
}

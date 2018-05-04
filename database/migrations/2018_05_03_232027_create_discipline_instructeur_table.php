<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisciplineInstructeurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discipline_instructeur', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            // lien vers la discipline
            $table->integer('discipline_id')->unsigned();
            $table->foreign('discipline_id')->references('id')->on('disciplines');
            //lien vers l'instructeur
            $table->integer('instructeur_id')->unsigned();
            $table->foreign('instructeur_id')->references('id')->on('instructeurs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discipline_instructeur');
    }
}

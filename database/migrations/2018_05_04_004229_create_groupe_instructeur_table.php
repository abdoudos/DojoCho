<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupeInstructeurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupe_instructeur', function (Blueprint $table) {
            //cette relation montre tel instructeur et attribué a tel groupe
            $table->increments('id');
            $table->timestamps();
            //lien vers groupes
            $table->integer('groupe_id')->unsigned();
            $table->foreign('groupe_id')->references('id')->on('groupes');
            //lien vers  instructeurs        
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
        Schema::dropIfExists('groupe_instructeur');
    }
}

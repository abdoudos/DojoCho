<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupeMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupe_memeber', function (Blueprint $table) {
            //cette relation montre quel membre est interessé a tel groupe 
            $table->increments('id');
            $table->timestamps();
             //lien vers groupes
             $table->integer('groupe_id')->unsigned();
             $table->foreign('groupe_id')->references('id')->on('groupes');
             // lien vers  members
            $table->integer('member_id')->unsigned();
            $table->foreign('member_id')->references('id')->on('members');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groupe_memeber');
    }
}

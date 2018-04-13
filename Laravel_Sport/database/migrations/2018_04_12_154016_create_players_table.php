<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Players', function (Blueprint $table) {
            $table->increments('Player_Id');
            $table->string('First_Name');
            $table->string('Player_Name');
            $table->integer('Player_Nb');
            $table->string('Player_Country');
            $table->integer('Team_Id');
            $table->integer('Player_Stat_Id');
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Players');
    }
}

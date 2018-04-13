<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersStatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players_stat', function (Blueprint $table) {
            $table->increments('Player_Stat_Id');
            $table->integer('Player_Id');
            $table->integer('Player_Nb_Match');
            $table->integer('Player_Wins');
            $table->integer('Player_Loss');
            $table->integer('Player_Nb_Goals');
            $table->integer('Player_Nb_Faults');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players_stat');
    }
}

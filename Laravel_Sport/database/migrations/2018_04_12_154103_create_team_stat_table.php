<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamStatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Team_Stat', function (Blueprint $table) {
            $table->increments('Team_Stats_Id');
            $table->integer('Team_Id');
            $table->integer('Team_Nb_Players');
            $table->integer('Team_Ranking');
            $table->integer('Team_Nb_Match');
            $table->integer('Team_Wins');
            $table->integer('Team_Loss');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Team_Stat');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsStatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams_stat', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Team_Id');
            $table->integer('Team_Nb_Players');
            $table->integer('Team_Ranking');
            $table->integer('Team_Nb_Match');
            $table->integer('Team_Wins');
            $table->integer('Team_Loss');
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
        Schema::dropIfExists('teams_stat');
    }
}

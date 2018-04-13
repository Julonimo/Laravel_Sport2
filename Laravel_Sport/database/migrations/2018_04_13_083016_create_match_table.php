<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Team1_Id');
            $table->integer('Team2_Id');
            $table->integer('Team1_Goals');
            $table->integer('Team2_Goals');
            $table->integer('Match_Winner');
            $table->integer('Match_Looser');
            $table->integer('Match_Nb_Fault');
            $table->integer('Match_Meteo');
            $table->integer('Placement');
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
        Schema::dropIfExists('match');
    }
}

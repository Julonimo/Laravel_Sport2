<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Matches', function (Blueprint $table) {
            $table->increments('Match_id');
            $table->integer('Team1_Id');
            $table->integer('Team2_Id');
            $table->integer('Team1_Goals');
            $table->integer('Team2_Goals');
            $table->string('Match_Winner');
            $table->string('Match_Looser');
            $table->integer('Match_Nb_Faults');
            $table->string('Match_Meteo');
            $table->string('Placement');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Matches');
    }
}

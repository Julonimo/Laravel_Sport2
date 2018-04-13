<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    // erreur obtenue dans php artisan tinjker quand $Teams->save() :
    // Illuminate\Database\QueryException with message 'SQLSTATE[42S22]: Column not found: 1054 Unknown column 'updated_at' in 'field list' (SQL: insert into `Teams` (`Team_Country`, `Team_Name`, `updated_at`, `created_at`) values (Japan, NHK SoccerClub, 2018-04-12 17:49:43, 2018-04-12 17:49:43))'


    public function up()
    {
        Schema::create('Teams', function (Blueprint $table) {
            $table->increments('Team_id');
            $table->string('Team_Name');
            $table->string('Team_Country');
            $table->string('Team_Flag_Path');
            $table->integer('Team_Stats_Id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Teams');
    }
}

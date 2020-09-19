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
        Schema::create('players', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('name', 100);
            $table->char('roll', 100);
            $table->integer('country_id');
            $table->integer('odi_matches')->default(0);
            $table->integer('test_matches')->default(0);
            $table->integer('t20_matches')->default(0);
            $table->integer('odi_runs')->default(0);
            $table->integer('test_runs')->default(0);
            $table->integer('t20_runs')->default(0);
            $table->integer('odi_50s')->default(0);
            $table->integer('test_50s')->default(0);
            $table->integer('t20_50s')->default(0);
            $table->integer('odi_100s')->default(0);
            $table->integer('test_100s')->default(0);
            $table->integer('t20_100s')->default(0);
            $table->integer('odi_wickets')->default(0);
            $table->integer('test_wickets')->default(0);
            $table->integer('t20_wickets')->default(0);
            $table->integer('odi_highest_score')->default(0);
            $table->integer('test_highest_score')->default(0);
            $table->integer('t20_highest_score')->default(0);
            $table->integer('odi_batting_average')->default(0);
            $table->integer('test_batting_average')->default(0);
            $table->integer('t20_batting_average')->default(0);
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
        Schema::dropIfExists('players');
    }
}

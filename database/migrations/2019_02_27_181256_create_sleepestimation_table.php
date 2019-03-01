<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSleepestimationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sleepestimation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('milestraveled');
            $table->integer('workhours');
            $table->integer('exercisehours');
            $table->integer('age');
            $table->integer('calories');
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
        Schema::dropIfExists('sleepestimation');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalorieestimationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calorieestimation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sleephours');
            $table->string('gender');
            $table->integer('activeworkhours');
            $table->integer('waterliter');
            $table->integer('exercisehours');
            $table->string('medicine');
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
        Schema::dropIfExists('calorieestimation');
    }
}

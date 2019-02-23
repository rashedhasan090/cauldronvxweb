<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalscheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personalschedule', function (Blueprint $table) {
            $table->increments('id');
            $table->string('weekday');
            $table->string('wakeuptime');
            $table->string('bfasttime');
            $table->string('exercise');
            $table->string('goingtowork');
            $table->string('startworkingat');
            $table->string('returnhome');
            $table->string('eveningactivity');
            $table->string('watchingtv');
            $table->string('bedtime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personalschedule');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYearlyreminderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yearlyreminder', function (Blueprint $table) {
            $table->increments('id');
            $table->string('whichyear');
            $table->string('whichmonth');
            $table->string('monthday');
            $table->string('yourevent');
            $table->string('birthday');
            $table->string('marrige');
            $table->string('celebration');
            $table->string('mourning');
            $table->string('national');
            $table->string('note');
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
        Schema::dropIfExists('yearlyreminder');
    }
}

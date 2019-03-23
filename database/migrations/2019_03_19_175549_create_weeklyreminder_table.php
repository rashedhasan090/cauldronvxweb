<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeeklyreminderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weeklyreminder', function (Blueprint $table) {
            $table->increments('id');
            $table->string('whichday');
            $table->string('workday');
            $table->string('holiday');
            $table->string('marrige');
            $table->string('celebration');
            $table->string('mourning');
            $table->string('national');
            $table->string('other');
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
        Schema::dropIfExists('weeklyreminder');
    }
}

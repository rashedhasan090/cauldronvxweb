<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficeschTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_officesch', function (Blueprint $table) {
            $table->increments('id');
            $table->string('weekday');
            $table->string('signintime');
            $table->string('makereport');
            $table->string('filescheck');
            $table->string('meetingtoday');
            $table->string('customerservice');
            $table->string('pendingfile');
            $table->string('project');
            $table->string('signout');
            $table->string('addown');
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
        Schema::dropIfExists('_officesch');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_information', function (Blueprint $table) {
            $table->bigIncrements('timinf_id');
            $table->datetime('timinf_time')->nullable();
            $table->integer('timinf_result')->nullable();
            $table->string('timinf_reporter')->nullable();
            $table->string('timinf_leader')->nullable();
            $table->string('timinf_superviser')->nullable();
            $table->biginteger('interviewer_int_id');
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
        Schema::dropIfExists('time_information');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterviewersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interviewers', function (Blueprint $table) {
            $table->bigIncrements('interviewer_id');
            $table->string('interviewer_firstname')->nullable();
            $table->string('interviewer_fullname')->nullable();
            $table->string('interviewer_lastname')->nullable();
            $table->string('interviewer_address')->nullable();
            $table->integer('interviewer_status')->nullable();
            $table->decimal('interviewer_longitude');
            $table->decimal('interviewer_latitude');
            $table->integer('interviewer_numberoftime')->nullable();
            $table->biginteger('emppro_id');
            $table->integer('language_id');
            $table->string('interviewer_deviceid_uploaded')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('interviewers');
    }
}

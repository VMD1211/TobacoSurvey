<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswerOfInterviewerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_of_interviewer', function (Blueprint $table) {
            $table->bigIncrements('ans_id');
            $table->string('ans_name');
            $table->string('ans_value')->nullable();
            $table->text('ans_content')->nullable();
            $table->string('anstype_id');
            $table->integer('ans_status')->nullable();
            $table->biginteger('ans_parentid')->nullable();
            $table->biginteger('int_id');
            $table->integer('ans_unit_id')->nullable();
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
        Schema::dropIfExists('answer_of_interviewer');
    }
}

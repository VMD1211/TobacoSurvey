<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterviewerinformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interviewerinformation', function (Blueprint $table) {
            $table->bigIncrements('intinf_id');
            $table->string('intinf_sex')->nullable();
            $table->string('intinf_region')->nullable();
            $table->string('intinf_precinct')->nullable();
            $table->string('intinf_group')->nullable();
            $table->string('intinf_subgroup')->nullable();
            $table->string('intinf_family_no')->nullable();
            $table->integer('intinf_interviewer_no')->nullable();
            $table->biginteger('interviewer_id');
            $table->string('intinf_nation_code')->nullable();
            $table->string('intinf_admprovince_code')->nullable();
            $table->string('intinf_admdistrict_code')->nullable();
            $table->string('intinf_admcommune_code')->nullable();
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
        Schema::dropIfExists('interviewerinformation');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswerGisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_gis', function (Blueprint $table) {
            $table->bigIncrements('ansgis_id');
            $table->string('ansgis_name')->nullable();
            $table->string('ansgis_code')->nullable();
            $table->binary('ansgis_geometry')->nullable();
            $table->biginteger('int_id')->nullable();
            $table->string('anstype_id')->nullable();
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
        Schema::dropIfExists('answer_gis');
    }
}

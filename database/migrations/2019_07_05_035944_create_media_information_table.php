<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_information', function (Blueprint $table) {
            $table->bigIncrements('mediaint_id');
            $table->biginteger('int_id')->nullable();
            $table->string('mediaint_url')->nullable();
            $table->datetime('mediaint_created')->nullable();
            $table->datetime('mediaint_updated')->nullable();
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
        Schema::dropIfExists('media_information');
    }
}

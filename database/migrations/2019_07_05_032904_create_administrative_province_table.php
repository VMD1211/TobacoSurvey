<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministrativeProvinceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrative_province', function (Blueprint $table) {
            $table->bigIncrements('gid')->nullable();
            $table->string('admprovince_code')->nullable();
            $table->string('admprovince_name')->nullable();
            $table->decimal('admprovince_area')->nullable();
            $table->string('nation_code')->nullable();
            $table->binary('geometry')->nullable();
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
        Schema::dropIfExists('administrative_province');
    }
}

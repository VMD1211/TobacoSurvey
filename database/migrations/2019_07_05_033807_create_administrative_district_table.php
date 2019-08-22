<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministrativeDistrictTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrative_district', function (Blueprint $table) {
            $table->bigIncrements('gid')->nullable();
            $table->string('admdistrict_code')->nullable();
            $table->string('admdistrict_name')->nullable();
            $table->decimal('admdistrict_area')->nullable();
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
        Schema::dropIfExists('administrative_district');
    }
}

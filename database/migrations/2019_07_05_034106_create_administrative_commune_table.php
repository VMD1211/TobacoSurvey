<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministrativeCommuneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrative_commune', function (Blueprint $table) {
            $table->bigIncrements('gid')->nullable();
            $table->string('admcommune_code')->nullable();
            $table->string('admcommune_name')->nullable();
            $table->decimal('admcommune_area')->nullable();
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
        Schema::dropIfExists('administrative_commune');
    }
}

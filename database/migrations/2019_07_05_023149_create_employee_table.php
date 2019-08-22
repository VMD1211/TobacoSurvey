<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->bigIncrements('employee_id');
            $table->string('employee_name')->nullable();
            $table->string('employee_address')->nullable();
            $table->string('employee_phone')->nullable();
            $table->string('employee_email');
            $table->string('employee_password');
            $table->string('employee_token');
            $table->string('employee_tokenexpirytime')->nullable();
            $table->integer('employee_status')->nullable();
            $table->datetime('employee_created')->nullable();
            $table->datetime('employee_updated')->nullable();
            $table->biginteger('client_id');
            $table->integer('language_id');
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
        Schema::dropIfExists('employee');
    }
}

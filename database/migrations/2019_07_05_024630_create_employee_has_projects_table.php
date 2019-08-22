<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeHasProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_has_projects', function (Blueprint $table) {
            $table->bigIncrements('emppro_id');
            $table->string('emppro_deviceid')->nullable();
            $table->string('emppro_note')->unique();
            $table->integer('emppro_status');
            $table->biginteger('emp_id');
            $table->biginteger('project_id');
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
        Schema::dropIfExists('employee_has_projects');
    }
}

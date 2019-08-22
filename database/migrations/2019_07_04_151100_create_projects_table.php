<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('project_id');
            $table->string('project_name')->unique();
            $table->string('project_introduction')->nullable();
            $table->string('project_goal')->nullable();
            $table->string('project_status')->nullable();
            $table->datetime('project_created')->nullable();
            $table->datetime('project_updated')->nullable();
            $table->integer('client_id');
            $table->integer('language_id');
            $table->softDeletes();
            $table->rememberToken();
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
        Schema::dropIfExists('projects');
    }
}

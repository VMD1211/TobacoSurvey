<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

   public function up()
   {
       Schema::create('users', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('us_firstname')->nullable();
          $table->string('us_lastname')->nullable();
          $table->string('email')->unique();
          $table->string('password');
          $table->string('username')->unique();
          $table->string('us_token')->nullable();
          $table->dateTime('us_tokenexpirytime')->nullable();
          $table->smallInteger('us_status');
          $table->integer('us_la_id')->nullable();
          $table->string('us_avatar')->nullable();
          $table->tinyInteger('us_role')->default(config('common.role.manager'));
          $table->rememberToken();
          $table->softDeletes();
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
        Schema::dropIfExists('users');
    }
}

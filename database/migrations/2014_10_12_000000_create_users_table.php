<?php

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
            $table->increments('id');
            $table->string('user_status')->default('new');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('role')->default('user');
            $table->string('password', 60);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('location');
            $table->rememberToken();
            $table->timestamps();
            $table->timestamp('last_login');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}

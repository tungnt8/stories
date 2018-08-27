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
            $table->increments('id');
            $table->uuid('uuid');
            $table->string('user_name', 100);
            $table->string('email')->unique();
            $table->string('password', 200);
            $table->string('full_name', 30);
            $table->string('avatar', 200);
            $table->longText('about');
            $table->string('facebook_id', 100);
            $table->string('google_id', 100);
            $table->rememberToken();
            $table->dateTime('created_at');
            $table->dateTime('modified_at');
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

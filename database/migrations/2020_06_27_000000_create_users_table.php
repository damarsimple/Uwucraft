<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('username', 255);
            $table->string('realname', 255);
            $table->string('password', 255);
            $table->string('ip', 40)->nullable();
            $table->bigInteger('lastlogin')->nullable();
            $table->double('x')->default(0);
            $table->double('y')->default(0);
            $table->double('z')->default(0);
            $table->string('world', 255)->default('world');
            $table->bigInteger('regdate')->default(0);
            $table->string('regip', 40)->nullable();
            $table->float('yaw')->nullable();
            $table->float('pitch')->nullable();
            $table->string('email', 255)->nullable();
            $table->smallInteger('isLogged')->default(0);
            $table->smallInteger('hasSession')->default(0);
            $table->string('totp', 16)->nullable();
            $table->string('UUID', 36)->nullable();
            $table->rememberToken();
            $table->boolean('is_admin')->default(false);
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
    }
}

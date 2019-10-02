<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Emadadly\LaravelUuid\Uuids;
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
            $table->uuid('id');
            $table->primary('id');
            $table->string('name');
            $table->string('first_name');
            $table->string('surname');
            $table->string('username');
            $table->string('location')->nullable();
            $table->string('gender')->nullable();
            $table->string('occupation')->nullable();
            $table->string('skills')->nullable();
            $table->boolean('status')->default(0);
            $table->string('phone_number')->nullable();
            $table->string('email')->unique();
            $table->string('password');
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

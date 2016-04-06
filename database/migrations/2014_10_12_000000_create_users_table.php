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
            $table->string('name');
            $table->string('phone_number');
            // $table->string('nIdNumber');
            // $table->string('alt_nc_id');
            // $table->string('nc_holders_name');
            // $table->string('nc_holders_phone');
            $table->smallInteger('role');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->integer('foreignId')->nullable();
            $table->string('registered_by');
            
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
        Schema::drop('users');
    }
}

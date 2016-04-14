<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mother_id');
            $table->integer('child_id')->nullable();
            $table->string('phone_number');
            $table->integer('notif_id');
            $table->string('notif_msg');
            $table->string('notif_category');
            $table->integer('notif_priority');
            $table->date('send_date');
            $table->integer('institute_id');
            $table->date('institute_conf')->nullable();
            $table->date('mother_conf')->nullable();

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
        Schema::drop('log');
    }
}

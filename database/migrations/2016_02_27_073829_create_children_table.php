<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('children', function (Blueprint $table){
            $table->integer('id')->primary();
            $table->integer('mothers_id');
            $table->string('name');
            $table->date('dob');
            $table->float('weight');
            $table->string('birthCertNo');
            $table->string('blood_group');

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
        Schema::drop('children');
    }
}

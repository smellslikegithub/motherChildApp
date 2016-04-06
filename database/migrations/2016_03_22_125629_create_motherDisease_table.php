<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotherDiseaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mother_disease', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mother_id');
            $table->integer('disease_id');
            
            $table->date('date_diagnosed');
            $table->boolean('situation');
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
        Schema::drop('mother_disease');
    }
}

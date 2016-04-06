<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildDiseaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_disease', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('child_id');
            $table->integer('disease_id');
            $table->string('name');
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
        Schema::drop('child_disease');
    }
}

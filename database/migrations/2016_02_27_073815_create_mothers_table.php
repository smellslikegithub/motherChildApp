<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMothersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mothers', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('address');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('district');
            $table->string('division');
            //$table->boolean('expecting_baby'); --> not required
            $table->string('nIdNumber')->unique(); 
            $table->string('alt_nc_id')->unique();
            $table->string('nc_holders_name');
            $table->string('nc_holders_phone');
            $table->integer('no_of_children');
            $table->integer('days_pregnant')->nullable();
            $table->string('blood_group');
            $table->float('weight');
            $table->string('picture');
            
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
        Schema::drop('mothers');
    }
}

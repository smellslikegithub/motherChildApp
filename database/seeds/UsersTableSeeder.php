<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
    		'name' => 'admin',
    		'phone_number' =>"123456789",   		
    		
    		'role'=> 1,
    		'email'=>"admin@hackathon.com",
    		'password'=>bcrypt('123456'),
    		'foreignId'=>0,
    		'registered_by'=>"self"          
    		]);

    	DB::table('institutions')->insert([
    		'id' => 1,
    		'trade_license' =>'112542',
    		'address' => 'abc'
    	]);

    	DB::table('users')->insert([
    		'name' => 'institute',
    		'phone_number' =>"123456789",
    		
    		
    		'role'=> 2,
    		'email'=>"institute@hackathon.com",
    		'password'=>bcrypt('123456'),
    		'foreignId'=>1,
    		'registered_by'=>'admin'          
    		]);
    
    }


}

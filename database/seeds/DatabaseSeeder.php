<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	  // DB::table('users')->insert([
       //      	'id'=>1,
       //      	'email'=>'aslan1@aslan.com',
       //      	'password'=>Hash::make("aslan123"),
       //      	'name'=>'aslan1',
       //      ]);
       //      DB::table('users')->insert([
       //      	'id'=>2,
       //      	'email'=>'aslan@aslan.com',
       //      	'password'=>Hash::make("aslan123"),
       //      	'name'=>'aslan',
       //      ]);
        DB::table('folders')->insert([
            
            	'id' => 1,
	            'user_id' =>1,
	            'parent_id' =>0,
	            'name'=>'drive',
	            'sh_name'=>str_random(30),
	            'used_storage'=>'2.5 MB',
	            'added_star'=>false,
	            'lock'=>false,
	            'hide'=>false,
	            'permission'=>false,
	            'path'=>'drive',
	            'download'=>false,
            ]);

        DB::table('folders')->insert([
            
            	'id' => 2,
	            'user_id' =>1,
	            'parent_id' =>1,
	            'name'=>'images',
	            'sh_name'=>str_random(30),
	            'used_storage'=>'2.5 MB',
	            'added_star'=>0,
	            'lock'=>0,
	            'hide'=>0,
	            'permission'=>0,
	            'path'=>'images',
	            'download'=>3,
            ]);
            DB::table('folders')->insert([
            	'user_id' =>1,
	            'parent_id' =>1,
	            'name'=>'music',
	            'sh_name'=>str_random(30),
	            'used_storage'=>'2.5 MB',
	            'added_star'=>0,
	            'lock'=>0,
	            'hide'=>0,
	            'permission'=>0,
	            'path'=>'music',
	            'download'=>3,
            ]);
            DB::table('folders')->insert([
            	'user_id' =>1,
	            'parent_id' =>2,
	            'name'=>'private',
	            'sh_name'=>str_random(30),
	            'used_storage'=>'3.0 MB',
	            'added_star'=>0,
	            'lock'=>1,
	            'hide'=>0,
	            'permission'=>0,
	            'path'=>'images/private',
	            'download'=>3,
            ]);
           DB::table('folders')->insert([
            	'user_id' =>1,
	            'parent_id' =>2,
	            'name'=>'football',
	            'sh_name'=>str_random(30),
	            'used_storage'=>'6.5 MB',
	            'added_star'=>0,
	            'lock'=>1,
	            'hide'=>0,
	            'permission'=>0,
	            'path'=>'images/football',
	            'download'=>3,
            ]);
            DB::table('folders')->insert([
            	'user_id' =>1,
	            'parent_id' =>3,
	            'name'=>'eminem',
	            'sh_name'=>str_random(30),
	            'used_storage'=>'2.5 MB',
	            'added_star'=>1,
	            'lock'=>0,
	            'hide'=>0,
	            'permission'=>0,
	            'path'=>'music/eminem',
	            'download'=>3,
            ]);
            DB::table('folders')->insert([
            	'user_id' =>1,
	            'parent_id' =>6,
	            'name'=>'2016-album',
	            'sh_name'=>str_random(30),
	            'used_storage'=>'2.5 MB',
	            'added_star'=>1,
	            'lock'=>0,
	            'hide'=>0,
	            'permission'=>0,
	            'path'=>'music/eminem/2016-album',
	            'download'=>3,
            ]);
            DB::table('folders')->insert([
            	'user_id' =>1,
	            'parent_id' =>1,
	            'name'=>'games',
	            'sh_name'=>str_random(30),
	            'used_storage'=>'15 MB',
	            'added_star'=>0,
	            'lock'=>0,
	            'hide'=>0,
	            'permission'=>0,
	            'path'=>'games',
	            'download'=>3,
            ]);

          

        
    }
}

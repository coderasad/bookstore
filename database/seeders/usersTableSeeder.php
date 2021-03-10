<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id'=>'1',
            'name'=>'Mr. Admin',
            'email'=>'admin@gmail.com',
            'user_type'=>'paid',
            'password'=>bcrypt('12345678'),
        ]);
           
        DB::table('users')->insert([
            'role_id'=>'2', 
            'name'=>'Mr. Author',
            'user_type'=>'free',
            'email'=>'author@gmail.com',
            'password'=>bcrypt('12345678'),
        ]);
    }
}

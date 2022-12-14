<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Joy",
            'first_surname' => "Joy",
            'second_surname' => "TI ",
            'gender' => "M",
            'type_user'=>'1',
            'status'=>'2',
            'user' => "joy",
            'email' => "joy@gmail.com",
            'password' => bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'name' => "cliente",
            'first_surname' => "cliente",
            'second_surname' => "TI ",
            'gender' => "M",
            'type_user'=>'2',
            'status'=>'2',
            'user' => "cliente",
            'email' => "cliente@gmail.com",
            'password' => bcrypt('123456')
        ]);

    }
}

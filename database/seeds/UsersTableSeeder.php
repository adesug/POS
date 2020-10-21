<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert(array(
        [
         'name' => 'Daffa\' Shidqi', 
         'email' => 'daffa@gmail.com',
         'password' => bcrypt('daffashidqi'),
         'foto' => 'user.png',
         'level' => 1
        ],
        [
         'name' => 'Annisa Nabil', 
         'email' => 'nabil@gmail.com',
         'password' => bcrypt('annisanabil'),
         'foto' => 'user.png',
         'level' => 2
        ]
      ));

    }
}

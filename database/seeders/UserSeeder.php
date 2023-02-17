<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'role' => 'admin',
            'name' => 'Natalia',
            'surname' => 'Vorobyeva',
            'nick' => 'Nati',
            'email' => 'nati@gmail.com',
            'password' => '123456',
            
         ]); 
    }
}

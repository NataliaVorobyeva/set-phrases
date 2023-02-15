<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FraseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('frases')->insert([ 
           'text' => 'Haz de cada día tu obra maestra.',
           'image' => 'https://www.nationalgeographic.com.es/medio/2022/07/12/nebulosa-de-carina_00673698_2000x1158.jpg',
           'author' => 'Jhon Wooden.',
           
        ]);
    }
}

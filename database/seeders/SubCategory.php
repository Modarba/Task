<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategory extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[['name'=>'shoes1'],['name'=>'shoes2'],['name'=>'shoes3'],['name'=>'shoes4'],['name'=>'shoes5']];
        DB::table('sub_categories')->insert($data);
    }
}

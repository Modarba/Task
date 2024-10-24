<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            ['name'=>'h1','price'=>100],['name'=>'h2','price'=>200],['name'=>'h3','price'=>300]
        ];
        DB::table('products')->insert($data);
    }
}

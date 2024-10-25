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
        $array_data=[
            ['name'=>'h1','price'=>0,'sub_categories_id'=>1,'categories_id'=>1],['name'=>'h2','price'=>200,'sub_categories_id'=>2,'categories_id'=>2],['name'=>'h3','price'=>300,'sub_categories_id'=>3,'categories_id'=>3]
        ];
        foreach ($array_data as $arr)
        {
            $product=new \App\Models\Product();
            $product->name=$arr['name'];
            $product->price=$arr['price'];
            $product->categories_id=$arr['categories_id'];
            $product->sub_categories_id=$arr['sub_categories_id'];
            $product->save();
        }
    }
}

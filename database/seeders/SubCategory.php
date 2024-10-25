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

        $array_data=[
            ['name'=>'shoes1','categories_id'=>1],['name'=>'shoes2','categories_id'=>2],['name'=>'shoes3','categories_id'=>3],['name'=>'shoes4','categories_id'=>4],
        ];
        foreach ($array_data as $arr)
        {
            $sub=new \App\Models\SubCategory();
            $sub->name=$arr['name'];
            $sub->categories_id=$arr['categories_id'];
            $sub->save();
        }

    }
}

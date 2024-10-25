<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Category extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category_array=
            [['name'=>'shoes'],
            ['name'=>'Dress'],
            ['name'=>'Jackets'],
            ['name'=>'h3'],
            ['name'=>'h4']];
        foreach ($category_array as $cate)
        {
            $category=new  \App\Models\Category();
            $category->name=$cate['name'];
            $category->save();
        }
    }
}

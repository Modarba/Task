<?php

namespace Database\Seeders;

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
        $data=[
            ['name'=>'shoes'],['name'=>'Dress'],['name'=>'Jackets']
        ];
        \App\Models\Category::created($data);
      //  DB::table('categories')->insert($data);
    }
}

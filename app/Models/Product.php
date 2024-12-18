<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=['name','price','sub_categories_id','categories_id','percent'];
    public function SubCategory()
    {
        return $this->belongsTo(SubCategory::class,'sub_categories_id');
    }

    public function Category()
    {

        return $this->belongsTo(Product::class,'categories_id');
    }
}

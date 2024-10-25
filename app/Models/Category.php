<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','discount'];
    use HasFactory;

    public function SubCategory()
    {
        return $this->hasMany(SubCategory::class,'categories_id');
    }

    public function Product()
    {
        return $this->hasMany(Product::class,'categories_id');
    }
}

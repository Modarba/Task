<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'mx_sub_category'];
    use HasFactory;
    public function SubCategory()
    {
        return $this->belongsToMany(SubCategory::class,'category_sub_category');
    }

    public function Product()
    {
        return $this->hasMany(Product::class);
    }
}

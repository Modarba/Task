<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=['name','price'];
    public function SubCategory()
    {
        return $this->belongsTo(SubCategory::class,'product_subcategory');
    }
    public function Category()
    {

        return $this->belongsTo(Product::class);
    }

}

<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//discount on category or subcategory or product
//product after and before discount
//اذا عطيت ل سوب خصم بدو يعطي لكل ابنائو
//المنتج عندو خصم والسوب عندو خصم بياخد حصم حالو
//القوه من تحت لفوق
//percent discount or value
//
class SubCategory extends Model
{
    use HasFactory;
    protected $fillable=['name','categories_id'];
    public function Category()
    {
        return $this->belongsTo(Category::class,'categories_id');
    }
    public function Product()
    {
        return $this->hasMany(Product::class,'sub_categories_id');
    }
}

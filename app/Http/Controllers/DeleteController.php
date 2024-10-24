<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function DeleteCategory($id)
    {
        $cate=Category::find($id);
        $cate->delete();
        return response()->json(['Category deleted successfully'],201);
    }
    public function DeleteProduct($id)
    {
        $pro=Product::find($id);
        $pro->delete();
        return response()->json(['Product deleted successfully'],201);
    }
    public function DeleteSubCategory($id)
    {
        $sub=SubCategory::find($id);
        $sub->delete();
        return response()->json(['Sub Category Delete successfully'],201);
    }
    
}

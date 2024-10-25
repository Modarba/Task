<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Get Product with Category With Subcategory
    public function GetP()
    {
        $pro=Product::with('SubCategory')->with('Category')->get();
        return response()->json(['data'=>$pro],201);
    }
}

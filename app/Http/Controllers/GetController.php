<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class GetController extends Controller
{
    //get category with subcategory
    public function GetCategory()
    {
        $cate=Category::with('SubCategory')->get();
            return response()->json(['data'=>$cate],201);
    }
    //get subcategory with product
    public function GetProduct($id)
    {
        $sub=SubCategory::findorfail($id);
        return response()->json(['data'=>$sub->Product],201);
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    //Get SubCategory with Category with product
    public function GetS()
    {
        $sub=SubCategory::with('Category')->with('Product')->get();
        return response()->json(['data'=>$sub],201);
    }
}

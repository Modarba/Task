<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //Get All Category
    public function GetAll()
    {
        $category=Category::all();
        return response()->json(['data'=>$category],201);
    }
    //Get Category with SubCategory
    public function GetCS()
    {
        $category=Category::with('SubCategory')->get();
        return response()->json(['data'=>  $category],201);
    }
    //Get category with product
    public function GetCP()
    {
        $category=Category::with('Product')->get();
        return response()->json(['data'=>$category]);
    }
}

<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //Add Category
    public function AddCategory(Request $request)
    {
        $category=$request->validate(
            [
                'name'=>'required',
            ]
        );
        $cate=Category::create($category);
        return response()->json(['data Add successfully'],201);
    }
    //Delete Category
    public function DeleteCategory($id)
    {
        $category=Category::findorfail($id);
        $category->delete();
        return response()->json(['category delete Successfully'],201);
    }
}

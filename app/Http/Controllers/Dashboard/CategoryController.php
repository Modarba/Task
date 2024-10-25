<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Price;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
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
    // Add discount to category and subcategory and product
    public function AddDiscount(Request $request,$id)
    {
        $price=$request->input('price');
        $category=Category::findorfail($id);
        $category->price=$price;
        $category->save();
        $sub=SubCategory::where('categories_id',$id)->first();
        if (!$sub->price)
        {
            $sub->price=$price;
            $sub->save();
        }
        $product=Product::where('categories_id',$id)->get();
        foreach ($product as $products)
        {
        if (!$products->price)
        {
            $products->price=$price;
            $products->save();
        }}

        return response()->json(['Category before discount'=>$category->before(),'Category after discount'=>$price],201);
    }
}

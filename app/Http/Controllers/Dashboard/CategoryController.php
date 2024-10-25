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
        $request->validate([
            'price'=>'required',
            'percent'=>'required|numeric|min:0|max:100'
        ]);
        $price=$request->input('price');
        $percent=$request->input('percent');
        $category=Category::findorfail($id);
        $category->price=$price;
       $finalpersent=$price-($price*($percent/100));
        $category->percent=$finalpersent;
        $category->save();
        $sub=SubCategory::where('categories_id',$id)->first();
        if (!$sub->price&&!$sub->percent)
        {
            $sub->price=$price;
            $sub->percent=$finalpersent;
            $sub->save();
        }
        $product=Product::where('categories_id',$id)->get();
        foreach ($product as $products)
        {
        if (!$products->price&&!$products->percent)
        {
            $products->price=$price;
            $products->percent=$finalpersent;
            $products->save();
        }}

        return response()->json(['Price in Value'=>$price,'price in percent'=>$finalpersent],201);
    }
}

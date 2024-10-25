<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    //Add SubCategory to Category
    //Maximum number in category 4 Sub

    public function AddSub(\App\Http\Requests\SubCategory $request)
    {
        $s=new \App\Http\Requests\SubCategory();
        $count=SubCategory::query()->where('categories_id',$request->input('categories_id'))->count('categories_id');
        if ($count<=3) {
            SubCategory::create($request->validated());
            return response()->json(['SubCategory Add successfully'=>$count],201);
        }
        else{
            return response()->json(['Maximum Number 4 !'],201);
        }
    }
    //delete SubCategory
    public function DeleteSub($id)
    {
      $sub=SubCategory::findorfail($id);
      $sub->delete();
      return response()->json(['SubCategory Delete Successfully'],201);
    }
    //Add discount to subcategory and product
    public function AddDiscount(Request $request,$id)
    {
        $request->validate([
            'price'=>'required',
            'percent'=>'required|numeric|min:0|max:100'
        ]);
        $price=$request->input('price');
        $percent=$request->input('percent');
        $sub=SubCategory::findorfail($id);
        $sub->price=$price;
        $finalpersent=$price-($price*($percent/100));
        $sub->percent=$finalpersent;
        $sub->save();
        $pro=Product::where('sub_categories_id',$id)->get();
        foreach ($pro as $pros) {

            if (!$pros->price && !$pros->percent)
            {
                $pros->price=$price;
                $pros->percent=$finalpersent;
                $pros->save();
            }
        }
        return response()->json(['discount in price'=>$price,'discount in percent'=>$finalpersent]);

    }
}

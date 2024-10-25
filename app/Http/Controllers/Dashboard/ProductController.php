<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Add product to subcategory and category
    public function AddProduct(Product $request)
    {
        $pro=\App\Models\Product::create($request->validated());
        return response()->json(['message'=>'product add successfully'],201);
    }
    //Delete Product
    public function DeleteProduct($id)
    {
        $pro=\App\Models\Product::findorfail($id);
        $pro->delete();
        return response()->json(['Product delete successfully'],201);
    }
    public function AddDiscount(Request $request,$id)
    {
      $kk=$request->validate([
            'price'=>'required',
          'percent'=>'required|numeric|min:0|max:100'
        ]);
        $price=$request->input('price');
        $percent=$request->input('percent');
        $finalpersent=$price-($price*($percent/100));
         $pro=\App\Models\Product::findorfail($id);
         $pro->update(['price'=>$price,'percent'=>$finalpersent]);
         $pro->save();

         return response()->json(['product in value'=>$price,'product in percent'=>$finalpersent],201);
    }
}

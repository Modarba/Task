<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddController extends Controller
{
    //max 4
    public function AddSubToCategory(Request $request)
    {
        $sub=$request->input('idsub');
        $cate=$request->input('idcate');
        $k=DB::table('category_sub_category')->where('category_id',$cate)->count('category_id');
        if ($k<=3) {
            DB::table('category_sub_category')->where('category_id', $cate)->insert([
                'category_id' => $cate,
                'subcategory_id' => $sub,
            ]);
        }
        else{
            return response()->json(['Maximum Number 4 !'],201);
        }
        return  response()->json(['Add Successfully'],201);
    }
    public  function AddProductToSub(Request $request)
    {
        $pro=$request->input('product_id');
        $sub=$request->input('sub_id');
        DB::table('product_sub_category')->insert([
            'product_id'=>$pro,
                'subcategory_id'=>$sub,
        ]);
        return response()->json(['Add Product Successfully'],201);
    }

}

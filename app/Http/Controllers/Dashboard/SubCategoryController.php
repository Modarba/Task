<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
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
}

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
//add discount or delete
//discount on product or category or subcategory
//discount on product website value or persent
//discount on tree
//اذا عطيت ل سوب بيعطي لكل ابنائو
// ذا برودكت عندو خصم ما بياخد من الاباء
// بياخد القوه من تحت لفوق يعني اذا ما عندو بياخد من لي فوقو

//-----------------------------------Dashboard--------------------------------------
Route::post('addC',[\App\Http\Controllers\Dashboard\CategoryController::class,'AddCategory']);
Route::get('deleteC/{id}',[\App\Http\Controllers\Dashboard\CategoryController::class,'DeleteCategory']);
Route::post('AddS',[\App\Http\Controllers\Dashboard\SubCategoryController::class,'AddSub']);
Route::get('deleteS/{id}',[\App\Http\Controllers\Dashboard\SubCategoryController::class,'DeleteSub']);
Route::post('AddP',[\App\Http\Controllers\Dashboard\ProductController::class,'AddProduct']);
Route::get('deleteP',[\App\Http\Controllers\Dashboard\ProductController::class,'DeleteProduct']);
Route::post('Adddiscount/{id}',[\App\Http\Controllers\Dashboard\CategoryController::class,'AddDiscount']);


//---------------------------------------Api--------------------------------------------
Route::get('GetAC',[\App\Http\Controllers\Api\CategoryController::class,'GetAll']);
Route::get('GetCS',[\App\Http\Controllers\Api\CategoryController::class,'GetCS']);
Route::get('GetCP',[\App\Http\Controllers\Api\CategoryController::class,'GetCP']);
Route::get('GetS',[\App\Http\Controllers\Api\SubCategoryController::class,'GetS']);
Route::get('GetP',[\App\Http\Controllers\Api\ProductController::class,'GetP']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

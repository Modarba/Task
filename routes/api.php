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
//-----------------------------------Dashboard--------------------------------------
Route::post('addC',[\App\Http\Controllers\Dashboard\CategoryController::class,'AddCategory']);
Route::get('deleteC/{id}',[\App\Http\Controllers\Dashboard\CategoryController::class,'DeleteCategory']);
Route::post('AddS',[\App\Http\Controllers\Dashboard\SubCategoryController::class,'AddSub']);
Route::get('deleteS/{id}',[\App\Http\Controllers\Dashboard\SubCategoryController::class,'DeleteSub']);
Route::post('AddP',[\App\Http\Controllers\Dashboard\ProductController::class,'AddProduct']);
Route::get('deleteP',[\App\Http\Controllers\Dashboard\ProductController::class,'DeleteProduct']);
//Add discount to category and sub and product
Route::post('Adddiscount/{id}',[\App\Http\Controllers\Dashboard\CategoryController::class,'AddDiscount']);
//Add discount to product
Route::post('AddDP/{id}',[\App\Http\Controllers\Dashboard\ProductController::class,'AddDiscount']);
//Add discount to subcategory and product
Route::post('AddDS/{id}',[\App\Http\Controllers\Dashboard\SubCategoryController::class,'AddDiscount']);

//---------------------------------------Api--------------------------------------------
Route::get('GetAC',[\App\Http\Controllers\Api\CategoryController::class,'GetAll']);
Route::get('GetCS',[\App\Http\Controllers\Api\CategoryController::class,'GetCS']);
Route::get('GetCP',[\App\Http\Controllers\Api\CategoryController::class,'GetCP']);
Route::get('GetS',[\App\Http\Controllers\Api\SubCategoryController::class,'GetS']);
Route::get('GetP',[\App\Http\Controllers\Api\ProductController::class,'GetP']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

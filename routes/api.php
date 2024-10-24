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
// Delete SubCategory
Route::get('deleteS/{id}',[\App\Http\Controllers\DeleteController::class,'DeleteSubCategory']);
//Delete Product
Route::get('deleteP/{id}',[\App\Http\Controllers\DeleteController::class,'DeleteProduct']);
//Delete Category
Route::get('deleteC/{id}',[\App\Http\Controllers\DeleteController::class,'DeleteCategory']);
//add subcategory to category
Route::post('addSC',[\App\Http\Controllers\AddController::class,'AddSubToCategory']);
//add product to subcategory
Route::post('addPro',[\App\Http\Controllers\AddController::class,'AddProductToSub']);
//get category with subcategory
Route::get('getCs',[\App\Http\Controllers\GetController::class,'GetCategory']);
//get subcategory with product
Route::get('getSb/{id}',[\App\Http\Controllers\GetController::class,'GetProduct']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

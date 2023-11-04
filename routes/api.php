<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerControllerController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/posts', function () {
//     $post = DB::table('posts')->get();

//     return response()->json(
//         ["posts" => $post]
//     );
// });

Route::get('/products', [ProductController::class,'getProduct']);
Route::post('/product', [ProductController::class,'store']);
Route::post('/product/{id}', [ProductController::class,'update']);
Route::delete('/product/{id}', [ProductController::class,'destroy']);

// route for cusotomer

Route::get('/customers', [CustomerController::class,'index']);

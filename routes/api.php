<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/', function(){
    return 'Hello World';
});

Route::apiResource('posts',PostController::class);
Route::apiResource('products',ProductController::class);

Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);
Route::post('/logout',[AuthController::class,'logout'])->middleware('auth:sanctum');
Route::post('/addtrans',[AuthController::class,'addtrans']);
Route::post('/insertDetails',[AuthController::class,'insertDetails']);
Route::post('/updateTransactionStatus', [AuthController::class, 'updateStatus']);
Route::post('/transactions', [AuthController::class, 'store']);
Route::post('/updatetrans', [AuthController::class,'updatetrans']);
Route::post('/updateCus', [AuthController::class, 'updateCus']);
Route::post('/signup',[AuthController::class,'signup']);

Route::get('/getlist',[AuthController::class,'getlist']);
Route::get('/display/{id}',[AuthController::class,'display']);
Route::get('/getcustomer/{id}',[AuthController::class,'getcustomer']);
Route::get('/gethis/{id}',[AuthController::class,'gethis']);
Route::get('/cancelTrans/{id}',[AuthController::class,'cancelTrans']);
Route::get('/displayDet/{id}',[AuthController::class,'displayDet']);
Route::get('/getTransId/{id}',[AuthController::class,'getTransId']);
Route::get('getDetails/{id}',[AuthController::class,'getDetails']);

Route::delete('/deleteDetails', [AuthController::class, 'deleteDetails']);
Route::post('upload/{trackingNumber}', [AuthController::class, 'updateProfileImage']);


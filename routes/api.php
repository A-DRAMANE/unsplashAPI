<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddUser;
use App\Http\Controllers\AddImages;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register',[AddUser::class,'register']);
Route::post('logIn',[AddUser::class,'logIn']);
Route::get('users',[AddUser::class,'users']);
Route::post('addImages',[AddImages::class,'addImages']);
Route::post('imageList',[AddImages::class,'imageList']);
Route::post('delededImg',[AddImages::class,'delededImg']);
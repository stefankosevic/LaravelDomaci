<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClothesWebController;
use App\Http\Controllers\CategoryWebController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/clothes',[ClothesWebController::class, 'index']);
Route::get('/categories',[CategoryWebController::class, 'index']);

Route::get('/clothes/create',[ClothesWebController::class, 'create']);

Route::get('/clothes/{id}',[ClothesWebController::class, 'show']);
Route::get('/categories/{id}',[CategoryWebController::class, 'show']);

Route::post('/clothes',[ClothesWebController::class, 'store']);
Route::post('/categories',[CategoryWebController::class, 'store']);

Route::post('/clothes/{id}',[ClothesWebController::class, 'update']);
Route::post('/categories/{id}',[CategoryWebController::class, 'update']);
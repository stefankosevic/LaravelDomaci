<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\apis\ClothesRestController;
use App\Http\Controllers\apis\CategoryRestController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
    GET /clothes - vraca svu odecu iz baze u vidu JSON - index
    GET /clothes/{id} - vraca odecu sa datim id - jem - show
    POST /clothes - kreira novu odecu na osnovu tela zahteva - store
    PUT/PATCH /clothes/{id} - izmeni odecu sa datim id - jem podacima iz tela zahteva - update
    DELETE /clothes/{id} -  obrisi odecu sa datim id - jem - destroy
*/

Route::apiResources([
    'clothes'=>ClothesRestController::class,
    'categories'=>CategoryRestController::class
]);
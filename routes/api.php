<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;

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

Route::get('/categorie/all',[CategorieController::class, 'index']);
Route::post('/categorie/add',[CategorieController::class, 'store']);
Route::post('/categorie/update/{id}',[CategorieController::class, 'update']);
Route::delete('/categorie/delete/{id}',[CategorieController::class, 'destroy']);
Route::get('/categorie/search/{id}',[CategorieController::class, 'show']);

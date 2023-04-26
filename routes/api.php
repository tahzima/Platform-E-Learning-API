<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\FavorisController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PartController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\UserController;

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

Route::get('/commentaire/all',[CommentaireController::class, 'index']);
Route::post('/commentaire/add',[CommentaireController::class, 'store']);
Route::post('/commentaire/update/{id}',[CommentaireController::class, 'update']);
Route::delete('/commentaire/delete/{id}',[CommentaireController::class, 'destroy']);
Route::get('/commentaire/search/{id}',[CommentaireController::class, 'show']);

Route::get('/favoris/all',[FavorisController::class, 'index']);
Route::post('/favoris/add',[FavorisController::class, 'store']);
Route::post('/favoris/update/{id}',[FavorisController::class, 'update']);
Route::delete('/favoris/delete/{id}',[FavorisController::class, 'destroy']);
Route::get('/favoris/search/{id}',[FavorisController::class, 'show']);

Route::get('/formation/all',[FormationController::class, 'index']);
Route::post('/formation/add',[FormationController::class, 'store']);
Route::post('/formation/update/{id}',[FormationController::class, 'update']);
Route::delete('/formation/delete/{id}',[FormationController::class, 'destroy']);
Route::get('/formation/search/{id}',[FormationController::class, 'show']);

Route::get('/inscription/all',[InscriptionController::class, 'index']);
Route::post('/inscription/add',[InscriptionController::class, 'store']);
Route::post('/inscription/update/{id}',[InscriptionController::class, 'update']);
Route::delete('/inscription/delete/{id}',[InscriptionController::class, 'destroy']);
Route::get('/inscription/search/{id}',[InscriptionController::class, 'show']);

Route::get('/like/all',[LikeController::class, 'index']);
Route::post('/like/add',[LikeController::class, 'store']);
Route::post('/like/update/{id}',[LikeController::class, 'update']);
Route::delete('/like/delete/{id}',[LikeController::class, 'destroy']);
Route::get('/like/search/{id}',[LikeController::class, 'show']);

Route::get('/part/all',[PartController::class, 'index']);
Route::post('/part/add',[PartController::class, 'store']);
Route::post('/part/update/{id}',[PartController::class, 'update']);
Route::delete('/part/delete/{id}',[PartController::class, 'destroy']);
Route::get('/part/search/{id}',[PartController::class, 'show']);

Route::get('/section/all',[SectionController::class, 'index']);
Route::post('/section/add',[SectionController::class, 'store']);
Route::post('/section/update/{id}',[SectionController::class, 'update']);
Route::delete('/section/delete/{id}',[SectionController::class, 'destroy']);
Route::get('/section/search/{id}',[SectionController::class, 'show']);

Route::get('/user/all',[UserController::class, 'index']);
Route::post('/user/add',[UserController::class, 'store']);
Route::post('/user/update/{id}',[UserController::class, 'update']);
Route::delete('/user/delete/{id}',[UserController::class, 'destroy']);
Route::get('/user/search/{id}',[UserController::class, 'show']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ActorController;
use App\Http\Controllers\Api\DirectorController;
use App\Http\Controllers\Api\MovieController;
use App\Http\Controllers\Api\RatingController;
use App\Http\Controllers\Api\ReviewerController;
use App\Http\Controllers\Api\GenreController;



Route::get('/actors', [ActorController::class, 'show']);
Route::get('/actors/{act_id}', [ActorController::class, 'index']);


Route::get('/directors', [DirectorController::class, 'show']);
Route::get('/directors/{dir_id}', [DirectorController::class, 'index']);

Route::get('/genres', [GenreController::class, 'show']);
Route::get('/genres/{gen_id}', [GenreController::class, 'index']);

Route::get('/movies', [MovieController::class, 'show']);
Route::get('/movies/{mov_id}', [MovieController::class, 'index']);

Route::get('/ratings', [RatingController::class, 'show']);
Route::get('/ratings/{rev_id}', [RatingController::class, 'index']);

Route::get('/reviewers', [ReviewerController::class, 'show']);
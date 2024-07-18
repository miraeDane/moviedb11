<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ActorController;
use App\Http\Controllers\Api\DirectorController;
use App\Http\Controllers\Api\MovieController;
use App\Http\Controllers\Api\RatingController;
use App\Http\Controllers\Api\ReviewerController;
use App\Http\Controllers\Api\GenreController;

// Route::middleware('auth:sanctum')->group(function () {

//     Route::apiResource('/actors', ActorController::class);
//     Route::apiResource('/directors', DirectorController::class);
//     Route::apiResource('/movies', MovieController::class);
//     Route::apiResource('/rating', RatingController::class);
//     Route::apiResource('/reviews', ReviewerController::class);

//     Route::get('/actors', [ActorController::class, 'show']);
 
// });


Route::apiResource('/actors', ActorController::class);
Route::apiResource('/directors', DirectorController::class);
Route::apiResource('/movies', MovieController::class);
Route::apiResource('/genres', GenreController::class);
Route::apiResource('/rating', RatingController::class);
Route::apiResource('/reviews', ReviewerController::class);

Route::get('/actors', [ActorController::class, 'show']);
Route::get('/directors', [DirectorController::class, 'show']);
Route::get('/genres', [GenreController::class, 'show']);
Route::get('/movies', [MovieController::class, 'show']);
Route::get('/ratings', [RatingController::class, 'show']);
Route::get('/reviewers', [ReviewerController::class, 'show']);

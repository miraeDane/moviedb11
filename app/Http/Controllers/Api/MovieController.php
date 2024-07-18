<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::with('mov_id')->get();
        return response()->json($movies);
    }

    public function show(){

        $movies = Movie::all();
        $res = $movies->map(function ($movie) {
            return [
                'mov_id' => $movie->mov_id,
                'mov_title' => $movie->mov_title,
                'mov_year' => $movie->mov_year,
                'mov_lang' => $movie->mov_lang,
                'mov_dt_rel' => $movie->mov_dt_rel,
                'mov_rel_country' => $movie->mov_rel_country,
               
            ];
        });

        return response()->json([
            'movies' => $movies,
            'res' => $res
        ]);

   }
}

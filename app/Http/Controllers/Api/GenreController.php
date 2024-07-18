<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::with('gen_id')->get();
        return response()->json($genres);
    }

    public function show(){

        $genres = Genres::all();
        $res = $genres->map(function ($genre) {
            return [
                'gen_id' => $genre->gen_id,
                'gen_title' => $genre->gen_title,
            ];
        });

        return response()->json([
            'genres' => $genres,
            'res' => $res
        ]);

   }
}

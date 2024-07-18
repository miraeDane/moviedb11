<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rating;

class RatingController extends Controller
{
    public function index()
    {
        $ratings = Rating::with('rev_id')->get();
        return response()->json($ratings);
    }

    public function show(){

        $ratings = Rating::all();
        $res = $ratings->map(function ($rating) {
            return [
                'rev_id' => $rating->rev_id,
                'mov_id' => $rating->rev_stars,
                'num_rev' => $rating->num_o_ratings,
            ];
        });

        return response()->json([
            'ratings' => $ratings,
            'res' => $res
        ]);

   }
}

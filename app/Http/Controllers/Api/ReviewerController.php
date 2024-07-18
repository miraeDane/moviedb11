<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reviewer;

class ReviewerController extends Controller
{
    public function index()
    {
        $reviews = Reviewer::with('rev_id')->get();
        return response()->json($reviews);
    }

    public function show(){

        $reviews = Reviewer::all();
        $res = $reviews->map(function ($review) {
            return [
                'rev_id' => $review->rev_id,
                'rev_name' => $review->rev_name,
            ];
        });

        return response()->json([
            'reviewers' => $reviewers,
            'res' => $res
        ]);

   }
}

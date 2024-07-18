<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Director;

class DirectorController extends Controller
{
    public function index()
    {
        $directors = Director::with('dir_id')->get();
        return response()->json($directors);
    }

    public function show(){

        $directors = Director::all();
        $res = $directors->map(function ($director) {
            return [
                'dir_id' => $director->dir_id,
                'dir_fname' => $director->dir_fname,
                'dir_lname' => $director->dir_lname
            ];
        });

        return response()->json([
            'directors' => $directors,
            'res' => $res
        ]);

   }
}

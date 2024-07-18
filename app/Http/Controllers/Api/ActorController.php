<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Actor;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Database\Seeders\ActorSeeder;


class ActorController extends Controller
{
    public function index()
    {
        $actors = Actor::with('act_id')->get();
        return response()->json($actors);
    }
   public function show(){

        $actors = Actor::all();
        $res = $actors->map(function ($actor) {
            return [
                'act_id' => $actor->act_id,
                'fname' => $actor->act_fname,
                'lname' => $actor->act_lname,
                'gender' => $actor->act_gender,
            ];
        });

        return response()->json([
            'actors' => $actors,
            'res' => $res
        ]);

   }

 
}

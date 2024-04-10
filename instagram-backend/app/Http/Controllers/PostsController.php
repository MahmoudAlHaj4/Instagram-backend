<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\posts;

class PostsController extends Controller
{
    public function getPosts(){

        $posts = posts::all();
        return response()->json(['posts'=>$posts]);
    }
}

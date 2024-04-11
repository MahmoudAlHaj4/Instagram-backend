<?php

namespace App\Http\Controllers;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\Models\posts;

class PostsController extends Controller
{
    public function getPosts(){

        $posts = posts::all();
        return response()->json(['posts'=>$posts]);
    }

   
    }


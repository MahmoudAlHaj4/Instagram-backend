<?php

namespace App\Http\Controllers;
use Illuminate\Database\QueryException;
use App\Models\InstaPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class InstaPostController extends Controller
{
    public function createPosts(Request $request)
    
    {
        try {
            $request->validate([
                'user_id' => 'required|exists:users,id',
                'img' => 'required|img|mimes:jpeg,png,jpg,gif|max:2048', 
                'caption' => 'required|string'
            ]);

            

            $post = InstaPost::create([
                'user_id' => $request->user_id,
                'imag' => $request->file('img')->store('uploads'),
                'caption' => $request->caption,
            ]);

            return response()->json(['post' => $post], 201);
        } catch (QueryException $e) {
            return response()->json(['error' => 'Database error: ' . $e->getMessage()], 500);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong: ' . $e->getMessage()], 500);
        }
    }
    public function getposts(){
        $posts = InstaPost::all();
        return response()->json($posts);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postss; 
use Illuminate\Database\QueryException;
class PostssController extends Controller
{
    public function createPosts(Request $request)
    {
        try {
            $request->validate([
                'user_id' => 'required|exists:users,id',
                'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
                'caption' => 'required|string'
            ]);

            
            

            
            $post = Postss::create([
                'user_id' => $request->user_id,
                'image' => $request->file('img')->store('uploads'),
                'caption' => $request->caption,
            ]);

            return response()->json(['post' => $post], 201);
        } catch (QueryException $e) {
            return response()->json(['error' => 'Database error: ' . $e->getMessage()], 500);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong: ' . $e->getMessage()], 500);
        }
    }
    public function getPosts(){

        $posts = Postss::all();
        return response()->json(['posts'=>$posts]);
    }
}
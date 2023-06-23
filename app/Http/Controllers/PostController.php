<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
/*
@param Object Post
@return Response post view
*/

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts.index')->with(['posts'=>$post->getPaginateBylimit()]);
    }

    
    public function show(Post $post)
    {   
        return view('posts.show')->with(['post' => $post]);
    }
    
}

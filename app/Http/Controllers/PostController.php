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
        return view('posts.index')->with(['posts'=>$post->getPaginateBylimit(1)]);
    }
    
    public function show(Post $post)
    {
        return view('postsi/show')->with(['post' => $post]);
    }
    
    public function create()
    {
        return view('posts/create');
    }

    
    public function show(Post $post)
    {   
        return view('posts.show')->with(['post' => $post]);
    }
    
}

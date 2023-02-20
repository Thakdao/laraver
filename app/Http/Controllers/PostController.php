<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Post;
use Validator;

class PostController extends Controller
{
    // public function create()
    // {
    //     return view('home');
    // }

    public function store(Request $request)
    {
        $params = $request->all();
        $params['user_id'] = auth()->id();
        // dd($params);
        // $post = Post::create($params);



        $post = new Post;
        $post->content = $request->content;
        $post->user_id = auth()->id();
        $post->save();
    
        return redirect('/home');
    }
}

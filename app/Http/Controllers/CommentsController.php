<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comments;

class CommentsController extends Controller
{
    public function store(Post $post, Request $request)
    {
        $params = $request->all();
        $params['user_id'] = auth()->id();
        // dd($params);
        $comment = $post->comment()->create($params);



        // $comment = new Comments;
        // $comment->content = $request->content;
        // $comment->user_id = auth()->id();
        // $comment->save();
    
        return redirect()->route('home');
    }
}

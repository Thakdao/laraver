<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Likes;


class LikesController extends Controller
{
    //
    public function store(Post $post, Request $request){
        $pragam['user_id'] = auth()->id();
        $pragam['post_id'] = $post->id;
 
        $like = Likes::where($pragam)->exists();

        if($like){
            Likes::where($pragam)->delete();
        }else{
            $post->likes()->create($pragam);
        }
        return redirect()->route('home');
    }
}

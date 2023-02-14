<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\Post;
use Validator;

class PostController extends Controller
{
    // public function create()
    // {
    //     return view('home');
    // }

    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'content' => 'required',
    //     ]);
        
    //     $post = new Post;
    //     $post->body = $request->body;
    //     $post->save();
    
    //     return redirect('/home');
    // }

    // public function getPosts(){
    //             $getposts = DB::table('posts')->get();
    //             return view('home' , compact('getposts'));
    //         }
}

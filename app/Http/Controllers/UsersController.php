<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Post;

use DB;

class UsersController extends Controller
{
    public function index(){
        // lấy tất cả dữ liệu từ table users
        // $users = DB::table('users')->get();

        // return view('home' , compact('users'));

        //lấy cách dưới dễ gọi hơn
        $viewdata['users'] = DB::table('users')->get(); // lấy data bảng users
        $viewdata['posts1'] = DB::table('posts')->get(); // lấy data bảng posts
        $viewdata['posts2'] = Post::latest('id')->get(); // lấy hết dữ liệu bảng posts
        // latest('id') = orderBy('created_at', 'desc')   xếp theo từ mới đến cũ
        // $viewdata['comment'] = Comment::latest('id')->get(); 

        return view('home' , $viewdata);
            }

}
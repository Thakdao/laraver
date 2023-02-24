<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;
use App\Models\Post;
use App\Models\Likes;
use App\Models\Follow;
use DB;

class UsersController extends Controller
{
    public function index(){
        // lấy tất cả dữ liệu từ table users
        // $users = DB::table('users')->get();

        // return view('home' , compact('users'));

        //lấy cách dưới dễ gọi hơn
        $viewdata['users'] = Users::get();
        $viewdata['posts1'] = DB::table('posts')->get(); // lấy data bảng posts
        $viewdata['posts2'] = Post::latest('id')->get();
        // $viewdata['like'] = User::get();// lấy hết dữ liệu bảng posts
        // latest('id') = orderBy('created_at', 'desc')   xếp theo từ mới đến cũ
        // $viewdata['comment'] = Comment::latest('id')->get(); 

        $viewdata['follwer'] = Follow::where('from_user_id', auth()->id())->get();
        $a = $viewdata['follwer']->pluck('to_user_id');
        $viewdata['follow'] = Users::whereNotIn('id' , $a)->get();

        return view('home' , $viewdata);
            }

            public function changePassword()
{
   return view('change-password');
}

public function updatePassword(Request $request)
{
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        Users::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "パスワード変更されました！");
}

public function toggleFollow(Request $request){

    $condition = [
        'from_user_id' => auth()->id(),
        'to_user_id' => $request->to_user_id,
    ];
    $query = Follow::where($condition);
    $query2 = clone $query;

    if ($query->exists()){
        $query2->delete();
    }else{
        Follow::create($condition);
    }

    return redirect()->route('home');
}

}
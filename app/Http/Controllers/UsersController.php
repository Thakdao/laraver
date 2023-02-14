<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use DB;
class UsersController extends Controller
{
    public function index(){
        // lấy tất cả dữ liệu từ table users
        $users = DB::table('users')->get();
                return view('home' , compact('users'));
            }

}

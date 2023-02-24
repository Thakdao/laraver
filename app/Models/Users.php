<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Users extends Model
{
    use HasFactory;

     protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
    ];

    public function posts(){
        return $this->hasMany(Post::class);
    }//mốt user thì có nhiều bài đăng
    public function likes(){
        return $this->hasMany(Likes::class);
    }
    public function comment(){
        return $this->hasMany(Comment::class);
    }

    public function followers(){
        return $this->hasMany(Follow::class, 'from_user_id');
    }
    public function following(){
        return $this->hasMany(Follow::class, 'to_user_id');
    }


    public function getAvatarUrlAttribute(){
        return $this->avatar ? Storage::disk ()->url($this->avatar) : 123;
    }
}
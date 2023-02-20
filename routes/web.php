<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\LikesController;
use App\Models\Post;
use App\Models\Users;
use App\Models\Comments;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
// user 
Route::prefix('home')->group(function () {
    Route::get('/',[UsersController::class, 'index'])->name('home');
});

Route::post('post/store', [PostController::class, 'store'])->name('post.store');
Route::post('comment/store/{post}', [CommentsController::class, 'store'])->name('comment.store'); 
Route::post('like/store/{post}', [LikesController::class, 'store'])->name('like.store'); 

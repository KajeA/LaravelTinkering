<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
//use Http\Controllers\PostController;
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

//Route::get('/posts/{post}', function ($post) {
//    $posts = [
//        'my-first-post' => 'Hello, this is my first post',
//        'my-second-post' => 'Now I am getting the hang of it'
//    ];
//
//    if (! array_key_exists($post, $posts)) {
//        abort(404, 'Sorry, nothing here yet');
//    }
//
//    return view('post', [
//        'post' => $posts[$post]
//    ]);
//});

//Route::get('/posts/{post}', 'PostController@show');
Route::get('/posts/{post}', [PostController::class, 'show']);

Route::get('/', function() { return 'Hellow world';} );

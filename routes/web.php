<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home',["title" => "home"]);
});

Route::get('/home', function () {
    return view('home',["title" => "home"]);
});
Route::get('/about', function () {
    return view('about',["title" => "about"]) ;
    
});
Route::get('/post',[PostController::class,'index']);

//single post

Route::get('/posts/{post:slug}', [PostController::class,'show']);

Route::get('/categories', function (){
    return view('categories',['title'=> 'Post Categories','categories' => Category::all()]);
});

Route::get('/categories/{category:slug}', function (Category $category){
    return view('post',['title'=> "Post by Category : $category->name",'posts' => $category->posts->load('category','author'),'category'=>$category->name]);
});

Route::get('/authors/{author:username}', function (User $author){
    return view('post',['title'=> "Post By Author : $author->name",'posts' => $author->posts->load('category','author')]);
});


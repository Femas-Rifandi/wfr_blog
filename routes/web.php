<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\AdminCategoryController;
use App\Models\Category;
use App\Models\User;

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

Route::get('/bawaan', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "Femas Rifandi",
        "saya" => "Si paling Tampan",
        "email" => "femas.rifandi7@gmail.com",
        "image" => "Profil1.jpg"    
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

Route::get('/contact', function () {
    return view('contact',[
        "title" => "Contact",
        "active" => "contact"
    ]);
});

// halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);
 
    // $new_post = [];
    // foreach($blog_posts as $post){
    //     if($post["slug"] === $slug) {
    //         $new_post = $post;
    //     }
    // }

    Route::get('/categories', function(){
        return view('categories', [
            'title' => 'Post Categories',
            'active' => 'categories',
            'categories' => Category::all()
        ]);
    });
    
    // Route::get('categories/{category:slug}', function(Category $category){
    //     return view ('posts', [
    //         'title' => "Post By Category : $category->name",
    //         'active' => 'categories',
    //         'posts' => $category->posts->load('author', 'category')
    //     ]);
    // });

    // Route::get('/authors/{author:username}', function(User $author){
    //     return view ('posts', [
    //         'title' => "Post By Author : $author->name",
    //         'active' => 'blog',
    //         'posts' => $author->posts->load('author', 'category')
           
    //     ]);
    // });

    Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::post('/logout', [LoginController::class, 'logout']);


    Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
    Route::post('/register', [RegisterController::class, 'store']);

    Route::get('dashboard', function(){
        return view('dashboard.index');
    })->middleware('auth');
    
    Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
    // Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

    Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
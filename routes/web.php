<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
use App\Livewire\About;
use App\Livewire\AllPosts;
use App\Livewire\BlogHome;
use App\Livewire\Contact;
use App\Livewire\Dashboard;
use App\Livewire\EditJob;
use App\Livewire\EditPost;
use App\Livewire\LoginUser;
use App\Livewire\PostCreate;
use App\Livewire\RegisterUser;
use App\Livewire\ViewEachPost;
use Illuminate\Support\Facades\Route;

Route::get('/', BlogHome::class);
// Route::get('/blog', [BlogController::class, 'show']);
Route::get('/contact', Contact::class);
// Route::post('/contact', [BlogController::class, 'sendMessage']);
Route::get('/about', About::class);

Route::get('/author/register', RegisterUser::class);
// Route::post('/author/register', [RegisterController::class, 'create']);

Route::get('/author', LoginUser::class)->middleware('guest')->name('login');
// Route::delete('/logout', [LoginUser::class, 'logout']);
// Route::post('/author', [LoginController::class, 'create'])->middleware('guest');
// Route::delete('/logout', [LoginController::class, 'logout']);

Route::get('/author/create', PostCreate::class)->middleware('auth');
// Route::post('/author/create', [BlogController::class, 'store'])->middleware('auth');
Route::get('/post/{post}/{ou}/{lk}', ViewEachPost::class);
// Route::post('/post', [BlogController::class, 'comment']);
Route::get('/author/dashboard', Dashboard::class)->middleware('auth');
Route::delete('/logout', [Dashboard::class, 'logout'])->middleware('auth');
Route::get('/author/all-post', AllPosts::class)->middleware('auth');
Route::get('/author/post/{post}/edit', EditPost::class)->middleware('auth')->can('edit-post','post');
// Route::patch('/author/post/{post}/edit', [AuthorController::class, 'update'])->middleware('auth')->can('edit-post','post');
// Route::delete('/author/post/{post}/edit', [AuthorController::class, 'delete'])->middleware('auth')->can('edit-post','post');

Route::get('/search', [searchController::class, 'search']);

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/authors', function () {
//     return view('authors');
// });

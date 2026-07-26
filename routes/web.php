<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogsController;

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

// BASE
Route::get('/', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', [ContactController::class, 'telegram']);

// Blogs
Route::get('/blogs/{category}/{page}', [BlogsController::class, 'page']);

// Blogs
Route::get('/blogs/{categorys}', [BlogsController::class, 'categorys']);

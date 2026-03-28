<?php

use Illuminate\Support\Facades\Route;

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
    return view('blog');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/strategies', function () {
    return view('strategies');
});

Route::get('/strategies/str0001', function () {
    return view('strategies.str0001');
});

Route::get('/developments', function () {
    return view('developments');
});

Route::get('/developments/des0001', function () {
    return view('developments.des0001');
});

Route::get('/developments/des0002', function () {
    return view('developments.des0002');
});

Route::get('/belows', function () {
    return view('belows');
});

Route::get('/belows/bel0001', function () {
    return view('belows.bel0001');
});

Route::get('/devops', function () {
    return view('devops');
});

Route::get('/devops/dop0001', function () {
    return view('devops.dop0001');
});

Route::get('/consultancies', function () {
    return view('consultancies');
});

Route::get('/consultancies/con0001', function () {
    return view('consultancies.con0001');
});

Route::get('/single', function () {
    return view('single');
});

Route::get('/page', function () {
    return view('page');
});

Route::get('/contact', function () {
    return view('contact');
});

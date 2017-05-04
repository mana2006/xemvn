<?php

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
    return view('layouts.body.index');
});

Route::get('/unread', function() {
    return view('layouts.body.unread');
});

Route::get('/comment', function() {
    return view('layouts.body.comment');
});

Route::get('/hot', function() {
    return view('layouts.body.hot');
});

Route::get('/login', 'Auth\LoginController@getLogin');

Route::post('/login', 'Auth\LoginController@postLogin');


Route::get('/old', function() {
    return view('layouts.body.old');
});

Route::get('/rank_top', function() {
    return view('layouts.body.rank_top');
});

Route::get('/troll_images', function() {
    return view('layouts.body.troll_images');
});

Route::get('/uploads', function() {
    return view('layouts.body.uploads');
});

Route::get('/videos', function() {
    return view('layouts.body.videos');
});

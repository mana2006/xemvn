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

/*
 * content
 * 
 * */

Route::get('/', function () {
    return view('layouts.body.index');
});

Route::get('/unread', function() {
    return view('layouts.body.unread');
});

Route::get('/comment', function() {
    return view('layouts.body.comment');
});

Route::get('/videos', function() {
    return view('layouts.body.videos');
});

Route::get('/hot', function() {
    return view('layouts.body.hot');
});

Route::get('/login', 'Auth\LoginController@getLogin');

Route::post('/login', 'Auth\LoginController@postLogin');

Route::get('/logout', 'Auth\LoginController@logout');


Route::get('/old', function() {
    return view('layouts.body.old');
});

Route::get('/rank_top', function() {
    return view('layouts.body.rank_top');
});

Route::get('/troll_images', function() {
    return view('layouts.body.troll_images');
});

Route::get('/upload_images', function() {
    return view('layouts.body.upload_images');
});

Route::get('/upload_videos', function() {
    return view('layouts.body.upload_videos');
});

/*
 * url mypage
 * */

Route::get('/my_images', function () {
    return view('layouts.mypage.my_images');
});

Route::get('/my_videos', function () {
    return view('layouts.mypage.my_videos');
});

Route::get('/my_favo_images', function () {
    return view('layouts.mypage.my_favorite_images');
});

Route::get('/my_favo_videos', function () {
    return view('layouts.mypage.my_favorite_videos');
});

Route::get('/my_infor', function () {
    return view('layouts.mypage.my_infor_edit');
});

Route::get('/my_pass', function () {
    return view('layouts.mypage.my_pass_edit');
});


/*
 * admin
 * */

Route::group(['middleware' => 'web'], function () {
    Route::get('/admin/login', 'AdminLoginController@getLogin');

    Route::post('/admin/login', 'AdminLoginController@postLogin');

    Route::get('/admin/logout', 'AdminLoginController@getLogoutAdmin');

    Route::get('/admin/index', function () {
        return view('admin.dashboard.dashboard');
    });
});




Route::resource('user', 'UserController');



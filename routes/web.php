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
    return view('welcome');
});
/*-----------


PROJECT TA FIRST THEKE KOR



------------------*/
Route::match(['get', 'post'], '/register', function(){
    return view('register');
} )->name('register');

Route::match(['get', 'post'], '/profile', function(){
    return view('profile');
} )->name('profile');

Route::match(['get', 'post'], '/login', 'CodeController@check_login' )->name('login');

Route::match(['get', 'post'], '/dashboard', 'CodeController@check_ses' )->name('dashboard');

Route::match(['get', 'post'], '/product', function(){
    return view('product');
} )->name('product');

Route::match(['get', 'post'], '/productTable', function(){
    return view('productTable');
} )->name('productTable');

Route::match(['get', 'post'], '/verify_reg', 'CodeController@verify_reg' )->name('verify_reg');
Route::match(['get', 'post'], '/verify_login', 'CodeController@verify_lgin' );
Route::match(['get', 'post'], '/pass', 'CodeController@pass' );
Route::match(['get', 'post'], '/logout', 'CodeController@logout');

Route::match(['get', 'post'], '/verify_pronew', 'CodeController@verify_pronew' )->name('verify_pronew');

Route::match(['get', 'post'], '/verify_pro', 'CodeController@verify_pro' )->name('verify_pro');

?>
<?php
use App\Http\Controllers\FunctionController;

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

Route::get( '/', 'FunctionController@index');  //returns welcome page

Route::get( '/register', 'FunctionController@register')->name('register'); //returns the register page

Route::get( '/profile', 'FunctionController@profile')->name('profile'); //returns the profile page

Route::get( '/login', 'CodeController@check_login' )->name('login'); //returns login page

Route::get( '/dashboard', 'CodeController@dashboard' )->name('dashboard');

Route::get( '/product', 'FunctionController@product')->name('product');

Route::get( '/productTable', 'FunctionController@productTable')->name('productTable');

Route::post('verify_reg', 'CodeController@verify_reg' )->name('verify_reg');

Route::post('verify_login', 'CodeController@verify_lgin' )->name('verify_lgin');

// Route::post(['get', 'post'], '/pass', 'CodeController@pass' );

Route::get('/logout', 'CodeController@logout');

Route::post('/verify_pronew', 'CodeController@verify_pronew' )->name('verify_pronew');

Route::post('/verify_pro', 'CodeController@verify_pro' )->name('verify_pro');

?>
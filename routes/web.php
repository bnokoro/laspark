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
    return view('tee');
});


// Route::get('/', function () {
//     return view('try');
// });


// // Admin routes
//     Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
//     Route::get('/login', 'AuthController@index')->name('login');
//     Route::post('/login', 'AuthController@login');
//     Route::get('/logout', 'AuthController@logout');

//     Route::get('/', 'HomeController@index')->middleware('auth');
    
    
// });




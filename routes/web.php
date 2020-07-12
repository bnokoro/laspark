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


// Route::get('/a', function () {
//     // $2y$10$ncX/Jieq9pu4euU6JBNBQ.BRqxO9Rfg5emiBWNqvEVkpZzyfXMjba
    
//     return \Illuminate\Support\Facades\Hash::make('asdfghjkl');
// });


Route::get('/', function () {
    return view('layouts.app');
});

Route::resource('admin/parksgardens', 'ParksGardensController');


Route::resource('admin/services', 'ServicesController');

Route::resource('admin/bookings', 'BookingsController');

Route::resource('admin/park-bookings', 'ParkBookingsController');



Route::get('admin/settings', 'SettingsController@index');
Route::post('admin/settings/update-home', 'SettingsController@updateHome');
Route::post('admin/settings/update-aboutus', 'SettingsController@updateAboutus');
Route::post('admin/settings/update-pagetwo', 'SettingsController@updatePageTwo');
Route::post('admin/settings/update-faqs', 'SettingsController@updateFaqs');
Route::post('admin/settings/update-support', 'SettingsController@updateSupport');

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




// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


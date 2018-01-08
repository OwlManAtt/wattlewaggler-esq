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

Route::view('/', 'welcome')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/testimonials', 'testimonials')->name('testimonials');
Route::view('/planner', 'planner')->name('planner');

Route::view('/legal/terms', 'terms');
Route::view('/legal/privacy', 'privacy');

Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', 'ContactController@send');

// @TODO - Make this 'hackable' & add blog
Route::view('/login', 'login')->name('login');

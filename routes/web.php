<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', 'App\Http\Controllers\home_controller@home')->name('home');
Route::get('about', 'App\Http\Controllers\about_controller@about')->name('about');
Route::get('service', 'App\Http\Controllers\service_controller@service')->name('service');
Route::get('contact', 'App\Http\Controllers\contact_controller@contact')->name('contact');
Route::get('login', 'App\Http\Controllers\login_controller@login')->name('login');
Route::get('register', 'App\Http\Controllers\register_controller@register')->name('register');
Route::get('term', 'App\Http\Controllers\term_controller@term')->name('term');

Route::post('/save-registration', 'App\Http\Controllers\term_controller@save')->name('save-registration');
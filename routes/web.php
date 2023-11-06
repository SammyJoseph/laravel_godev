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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

/* 
** Videoclase #1
*/

/* Route::view();
Route::get();
Route::post();
Route::put();
Route::delete();
Route::patch(); */

Route::view('/', 'welcome')->name('welcome');

Route::get('/', function(){
    return 'hello world';
});

Route::view('/', 'landing.index')->name('index');
Route::view('about', 'landing.about')->name('about');
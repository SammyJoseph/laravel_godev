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
** Clase #1
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

// Todas las rutas de este grupo usan el middleware auth
Route::middleware(['auth'])->group(function(){
    Route::view('/', 'landing.index')->name('index');
    Route::view('about', 'landing.about')->name('about');
});


/* 
** Clase #2
*/
Route::view('clase-2', 'clase-2.index')->name('clase-2.index');
Route::view('clase-2/about', 'clase-2.about')->name('clase-2.about');
Route::view('clase-2/services', 'clase-2.services')->name('clase-2.services');
Route::view('clase-2/contact', 'clase-2.contact')->name('clase-2.contact');
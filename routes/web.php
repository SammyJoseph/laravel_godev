<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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


/* 
** Clase #1
** usando rutas
*/
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
** usando blade
*/
Route::view('clase-2', 'clase-2.index')->name('clase-2.index');
Route::view('clase-2/about', 'clase-2.about')->name('clase-2.about');
Route::view('clase-2/services', 'clase-2.services')->name('clase-2.services');
Route::view('clase-2/contact', 'clase-2.contact')->name('clase-2.contact');

/* 
** Clase #3
** usando migraciones
*/

/* 
** Clase #4
** usando controladores
*/
Route::get('clase-4', [UserController::class, 'index'])->name('user.index');
Route::get('clase-4/create', [UserController::class, 'create'])->name('user.create');


/* 
** Clase #5
** el orden de las rutas importa; Laravel le da prioridad a la primera (arriba)
*/
Route::get('note/{id}', function($id){ return 'arriba ' . $id; });
Route::get('note/6', function(){ return 'abajo 6'; });

Route::get('clase-5', [NoteController::class, 'index'])->name('clase-5.index');
Route::get('clase-5/create', [NoteController::class, 'create'])->name('clase-5.create');
Route::post('clase-5', [NoteController::class, 'store'])->name('clase-5.store');
Route::get('clase-5/{note}/edit', [NoteController::class, 'edit'])->name('clase-5.edit');
Route::put('clase-5/{note}', [NoteController::class, 'update'])->name('clase-5.update');
Route::get('clase-5/{note}', [NoteController::class, 'show'])->name('clase-5.show');
Route::delete('clase-5/{note}', [NoteController::class, 'destroy'])->name('clase-5.destroy');

/* 
** Clase #6
** API (en la ruta api)
*/

/* 
** Clase #7
** factories & seeders
*/
Route::get('/clase-7', [ProductController::class, 'index'])->name('clase-7.index');

/* 
** Clase #8
** relaciones
*/
Route::get('/clase-8', [UserController::class, 'relations'])->name('clase-8.index'); 
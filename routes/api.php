<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\NoteApiController;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/* 
** Clase #6
** APIs
*/

// Route::prefix('v1')->resource('clase-6', NoteApiController::class);
// Route::resource('clase-6', NoteApiController::class);
/* Route::group(['prefix' => 'v1'], function () {
    Route::resource('clase-6', NoteApiController::class);
}); */

Route::prefix('v1')->group(function () {
    Route::resource('clase-6', NoteApiController::class)->except('create', 'edit');
});

/* 
** Clase #8
** relaciones
*/
Route::get('/clase-8', function(){
    $users = User::all();
    return UserResource::collection($users);
});

/* 
** Clase #8
** middlewares
*/
Route::middleware('example')->get('/clase-9', [ExampleController::class, 'index']);
Route::get('/clase-9/noaccess', [ExampleController::class, 'noaccess'])->name('noaccess');

Route::middleware('example', 'auth')->group(function () {
    Route::get('/clase-9/grupo-1', function () { return response()->json('Middleware Group', 200); });
    Route::get('/clase-9/grupo-2', function () { return response()->json('Middleware Group', 200); })->withoutMiddleware('auth');
});

Route::get('/clase-9/grupo-3', function () { return response()->json('Middleware Group', 200); });

Route::post('/clase-9/create', [AuthController::class, 'createUser']);
Route::post('/clase-9/login', [AuthController::class, 'loginUser']);
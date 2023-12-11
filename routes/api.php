<?php

use App\Http\Controllers\NoteApiController;
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
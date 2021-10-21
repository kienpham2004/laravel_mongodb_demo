<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('users', function() {
    return \App\Models\User::all();
});

Route::get('profiles', [ProfileController::class, 'getAll']);
Route::get('profiles/{id}', [ProfileController::class, 'getOne']);
Route::post('profiles', [ProfileController::class, 'createProfile']);
Route::put('profiles/{id}', [ProfileController::class, 'updateProfile']);
Route::delete('profiles/{id}', [ProfileController::class, 'destroyProfile']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

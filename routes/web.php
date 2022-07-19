<?php

// use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});
Route::get('/',  [UserController::class, 'index']);
Route::get('/CreateUser', [UserController::class, 'createUser']);
Route::get('/{user}/edit',[UserController::class, 'editUsers']);
Route::put('/{user}', [UserController::class, 'submit']);
Route::delete('/{user}', [UserController::class, 'deleteUser']);
Route::post('/', [UserController::class, 'store']);
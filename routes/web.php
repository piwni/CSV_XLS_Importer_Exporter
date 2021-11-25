<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HomeController;
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

Route::get('/get', [App\Http\Controllers\UsersController::class, 'export']);
Route::get('/send', [App\Http\Controllers\UsersController::class, 'import']);
Route::get('/',[UsersController::class, 'show']);
Route::POST('/',[UsersController::class, 'import']);
Auth::routes();


Auth::routes();
Route::get('/users', [UsersController::class, 'export']);


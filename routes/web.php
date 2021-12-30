<?php

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

Route::get('/', [App\Http\Controllers\TestController::class, 'homepage']); // se for "/" executa home do test controller
Route::get('/developteam', [App\Http\Controllers\TestController::class, 'developteam']);
Route::get('/special', [App\Http\Controllers\TestController::class, 'special']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

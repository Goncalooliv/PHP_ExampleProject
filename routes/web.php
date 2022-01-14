<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AnuncioController;
use App\Http\Controllers\UserController;
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

Route::get('/', [TestController::class, 'homepage']); // se for "/" executa home do test controller
Route::get('/developteam', [TestController::class, 'developteam']);
Route::get('/special', [TestController::class, 'special']);



Auth::routes(['verify'=>true]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('tipo');

Route::get('/anuncios', [AnuncioController::class, 'showAll']);
Route::get('/dashboard',[AnuncioController::class, 'AdminDashboard']);
Route::get('/user/show/{users}', [UserController::class, 'show']);
Route::post('/users/destroy/{users}',[UserController::class, 'destroy']);
Route::get('anuncios/showanuncio/{anuncios}',[AnuncioController::class, 'show']);
Route::get('anuncios/details/{anuncios}',[AnuncioController::class,'details']);

Route::get('/searchanuncio',[AnuncioController::class, 'searchan']);
Route::get('/anuncios/create',[AnuncioController::class, 'create']);
Route::post('/anuncios', [AnuncioController::class, 'store']);
Route::get('anuncios/edit/{anuncios}',[AnuncioController::class,'edit']);
Route::post('/anuncios/update/{anuncios}', [AnuncioController::class, 'update']);
Route::post('/anuncios/destroy/{anuncios}', [AnuncioController::class, 'destroy']);

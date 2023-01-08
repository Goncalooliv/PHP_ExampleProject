<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AnuncioController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\CandidaturaController;
use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Auth;
//use App\Http\Controllers\Auth;
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


Route::get('/emailenviar', [MailController::class, 'sendEmail']);
//Rotas Iniciais
Route::get('/', [HomeController::class, 'homepage'])->name("welcome");
Route::get('/developteam', [HomeController::class, 'developteam']);


Route::get('/home', [HomeController::class, 'loginConfirmation'])->name('home');

Route::get('admin/home', [HomeController::class, 'loginAdmConfirmation'])->name('admin.home')->middleware('tipo');

Route::get('/anuncios', [AnuncioController::class, 'showAll']);
Route::get('/dashboard',[AnuncioController::class, 'AdminDashboard']);
Route::get('/dashboard/user', [AnuncioController::class, 'dashboardUser']);
Route::get('/dashboard/anuncio',[AnuncioController::class, 'dashboardAnuncio']);
Route::get('/checkCandidaturas/{id}',[CandidaturaController::class, 'candidaturasEfetuadas']);
Route::get('anuncios/details/{id}',[AnuncioController::class,'details']);
Route::get('anuncios/create',[AnuncioController::class, 'createPageShow']);
Route::post('createAnuncio', [AnuncioController::class, 'createAnuncio'])->name('createAnuncio');

Route::get('profile/{id}',[UserController::class, 'userProfile'])->name('user')->middleware('verified');

Route::get('users/edit/{id}',[UserController::class, 'userProfileTest'])->name('user')->middleware('verified');

Route::get('/meusAnuncios', [AnuncioController::class, 'meusAnuncios']);

//Rotas de Auth
Auth::routes(['verify'=>true]);

Route::get('/user/show/{users}', [UserController::class, 'show']);
Route::post('/users/destroy/{id}',[UserController::class, 'destroy']);

//Route::get('anuncios/showanuncio/{anuncios}',[AnuncioController::class, 'show']);

//Route::get('/user/profileEdit/{users}',[UserController::class,'profileEdit']);
Route::post('/users/update/{id}', [UserController::class, 'update']);
//Route::get('/anuncios/meusAnuncios',[AnuncioController::class, 'showMyAnuncios']);

Route::get('/searchanuncio',[AnuncioController::class, 'searchan'])->name('searchanuncio');

Route::get('anuncios/edit/{id}',[AnuncioController::class,'edit']);
Route::post('anuncios/update/{id}', [AnuncioController::class, 'update']);
Route::post('anuncios/destroy/{id}', [AnuncioController::class, 'destroy']);



Route::post('contactarEmpresa/{id}',[CandidaturaController::class,'enviarCandidatura'])->name('contactarEmpresa')->middleware('verified');




//ROTAS STRIPE
Route::get('/pagamento/{id}', [StripeController::class, 'showpagamento']);
Route::post ( '/pagamento', [StripeController::class,'call'] );

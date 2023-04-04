<?php

use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Afficher la page d'accueil
Route::get('/', [HomeController::class, 'home']);

// AfFicher nos challenges
Route::resource('challenges', ChallengeController::class)->middleware('auth');





// //Afficher un challlenge
// Route::get('challenges.show', [
//     ChallengeController::class,
//     'show'
// ])->middleware('auth');

// route du formulaire d'enregistrement
Route::get('/register', [UserController::class, 'create']);

//Creer un nouvel utilisateur
Route::post('/users', [UserController::class, 'store']);

//Deconnexion

Route::post('/logout', [UserController::class, 'logout']);

// route du formulaire de connexion
Route::get('/login', [UserController::class, 'login'])->name('login');

// connexion

Route::post('/users/authenticate', [UserController::class, 'authenticate']);

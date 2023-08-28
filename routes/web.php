<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

// Route::get('/', function () {
//     return view('home');
// });


//////////////////////// les differentes routes pour la creation de utilisateur et la connexion
Auth::routes();
// route pour afficher la page de connexion
Route::get('/', [AdminController::class, 'HomePage'])->name('HomePage');
// route pour la connexion
Route::post('store', [LoginController::class, 'store'])->name('store');
// route pour afficher le formulaire de création d'un utilisateur
Route::get('inscription', [RegisterController::class, 'enregistrer'])->name('inscription');
// route du tableau de bord
Route::get('/tableau-de-bord', [AdminController::class, 'Dashboard'])->name('Dashboard');
// route pour la deconnexion
Route::get('/deconnexion', [LogoutController::class, 'Deconnexion'])->name('deconnexion');

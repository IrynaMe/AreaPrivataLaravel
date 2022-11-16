<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\AdminController;

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

/* Route::get('/', function () {
    return view('front/home');
});
 */

Route::get('/', [TemaController::class, 'home']);
Route::get('/areaUtenti', [TemaController::class, 'areaUtenti']);
Route::any('/accesso', [TemaController::class, 'accesso']);
Route::any('/registrati', [TemaController::class, 'registrati']);
Route::any('/registraUtente', [TemaController::class, 'registraUtente']);

Route::any('/loginAmmre', [AdminController::class, 'loginAmmre']);
Route::any('/dashboard', [AdminController::class, 'dashboard']);
Route::any('/login', [AdminController::class, 'login']);

//gestione Utenti
//crea utenti
Route::any('/creaUtenti', [AdminController::class, 'creaUtenti']);
//lista utenti
Route::get('/listaUtenti', [AdminController::class, 'listaUtenti']);
//modifica utente
Route::any('/editCustomer/{id}', [AdminController::class, 'editCustomer']);
Route::any('/aggiornaCustomer', [AdminController::class, 'aggiornaCustomer']);
//save user
Route::any('/salvaUtenti', [AdminController::class, 'salvaUtenti']);

//delete user
Route::any('/delete/{id}', [AdminController::class, 'delete']);



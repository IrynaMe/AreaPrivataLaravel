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
Route::any('/services', [TemaController::class, 'services']);
Route::get('/about', [TemaController::class, 'about']);


//-------------------accesso---------

//Route::get('/loginUser', [TemaController::class, 'loginUser']);
Route::get('/loginUser', [TemaController::class, 'loginUser']);
Route::get('/contatti', [TemaController::class, 'contatti']);
Route::any('/accesso', [TemaController::class, 'accesso']);
Route::any('/registrati', [TemaController::class, 'registrati']);
Route::any('/registraUtente', [TemaController::class, 'registraUtente']);
Route::any('/logoutUser', [TemaController::class, 'logoutUser']);


Route::any('/loginAmmre', [AdminController::class, 'loginAmmre']);
Route::any('/dashboard', [AdminController::class, 'dashboard']);
Route::any('/login', [AdminController::class, 'login']);
Route::any('/mustLogin', [TemaController::class, 'mustLogin']);
Route::any('/logout', [AdminController::class, 'logout']);


//-----------------------gestione Utenti
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

//-------------------------CART
Route::any('/cart', [TemaController::class, 'cart']);
Route::any('/url', [TemaController::class, 'url']);
Route::any('/addcart/{id}', [TemaController::class, 'addCart']);
Route::post('/update_qty/{id}', [TemaController::class, 'update_qty']);
Route::any('/remove/{id}', [TemaController::class, 'remove']);
Route::any('/ProcediOrdine', [TemaController::class, 'ProcediOrdine']);
//aggiorna utente
Route::any('/completaDati/{id}', [TemaController::class, 'completaDati']);
Route::get('/pagamenti', [TemaController::class, 'pagamenti']);
Route::any('/grazie', [TemaController::class, 'grazie']);

//---------------Order----
Route::any('/ordini', [AdminController::class, 'ordini']);
Route::any('/ProcediOrdine', [TemaController::class, 'ProcediOrdine']);

//-------------------MAIL
Route::any('/mail', [TemaController::class, 'mail']);



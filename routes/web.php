<?php

use App\Http\Controllers\private\abonne\AbonneTableaudebordController;
use App\Http\Controllers\private\admin\AdminTableaudebordController;
use App\Http\Controllers\private\promoteur\PromoteurTableaudebordController;
use App\Http\Controllers\public\AcceuilController;
use App\Http\Controllers\public\AuthController;
use App\Http\Controllers\public\EvenementController;
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
#routes public
Route::get('/', [AcceuilController::class, 'index'])->name('acceuil');
Route::get('/evenements', [EvenementController::class, 'index'])->name('public.evenements');

#Private routes
Route::get('/admin-tableau-de-bord', [AdminTableaudebordController::class, 'admintableaudebord'])->name('private.admintableaudebord');
Route::get('/promoteur-tableau-de-bord', [PromoteurTableaudebordController::class, 'promoteurtableaudebord'])->name('private.promoteurtableaudebord');
Route::get('/abonne-tableau-de-bord', [AbonneTableaudebordController::class, 'abonnetableaudebord'])->name('private.abonnetableaudebord');

#Auth routes
Route::get('/inscription-option', [AuthController::class, 'InscriptionOption'])->name('public.inscription-option');
Route::get('/inscription-promoteur', [AuthController::class, 'InscriptionPromoteur'])->name('public.inscription-promoteur');
Route::post('/inscription-promoteur-action', [AuthController::class, 'InscriptionPromoteurAction'])->name('public.inscription-promoteur-action');
Route::get('/inscription-abonne', [AuthController::class, 'InscriptionAbonne'])->name('public.inscription-abonne');
Route::post('/inscription-abonne-action', [AuthController::class, 'InscriptionAbonneAction'])->name('public.inscription-abonne-action');
Route::get('/connexion', [AuthController::class, 'connexion'])->name('public.connexion');
Route::post('/connexion-action', [AuthController::class, 'connexionAction'])->name('public.connexion-action');

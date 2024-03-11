<?php

use App\Http\Controllers\private\abonne\AbonneTableaudebordController;
use App\Http\Controllers\private\admin\AdminTableaudebordController;
use App\Http\Controllers\private\promoteur\PromoteurTableaudebordController;
use App\Http\Controllers\public\AcceuilController;
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
//route public
Route::get('/', [AcceuilController::class, 'index'])->name('acceuil');
Route::get('/evenements', [EvenementController::class, 'index'])->name('public.evenements');

Route::get('/admin-tableau-de-bord', [AdminTableaudebordController::class, 'admintableaudebord'])->name('private.admintableaudebord');

Route::get('/promoteur-tableau-de-bord', [PromoteurTableaudebordController::class, 'promoteurtableaudebord'])->name('private.promoteurtableaudebord');
Route::get('/abonne-tableau-de-bord', [AbonneTableaudebordController::class, 'abonnetableaudebord'])->name('private.abonnetableaudebord');
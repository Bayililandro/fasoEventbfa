<?php

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

Route::get('/', [AcceuilController::class, 'index'])->name('acceuil');
Route::get('/evenements', [EvenementController::class, 'index'])->name('public.evenements');


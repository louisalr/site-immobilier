<?php

use App\Http\Controllers\AccueilController;
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

Route::get('/', [AccueilController::class,'index'])->name('accueil');

Route::get('/offre/{id}', [AccueilController::class, 'show'])->name('offre.show');

Route::get('/contact', [AccueilController::class, 'contact'])->name('contact');
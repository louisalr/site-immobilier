<?php

use App\Http\Controllers\AccueilController;
use App\Http\Livewire\Counter;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
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

Route::get('/connexion', [UtilisateurController::class, 'connexion'])->name('connexion');

Route::get('/inscription', [UtilisateurController::class, 'inscription'])->name('inscription');

Route::post('ajouterfavoris/{offre}', [UtilisateurController::class, 'AjouterFavoris']);
Route::post('retirerfavoris/{offre}', [UtilisateurController::class, 'RetirerFavoris']);


Route::group(['middleware' => ['auth']], function () { 
    Route::get('/poster/offre', [UtilisateurController::class, 'poster'])->name('poster.create');
    Route::post('/poster/offre', [UtilisateurController::class, 'enregistrer'])->name('poster.store');
    Route::post('/offre/{id}/message', [UtilisateurController::class, 'envoyer'])->name('message.envoyer');
    Route::get('/dashboard/favoris', [UtilisateurController::class,'favoris'])->name('dashboard.favoris');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

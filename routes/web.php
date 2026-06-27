<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StagiaireController;

// Kay-reddiriger nichan l /stagiaires fach kat-dkhol l l-site
Route::get('/', function () {
    return redirect('/stagiaires');
});

// Had l-line kay-gadd 7 dyal l-routes (index, create, store, show, edit, update, destroy)
Route::resource('stagiaires', StagiaireController::class);

// Route jdida dyal l-dashboard
Route::get('/dashboard', [StagiaireController::class, 'dashboard'])->name('dashboard');
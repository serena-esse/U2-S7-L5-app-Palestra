<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\attivitas;
use App\Http\Controllers\AttivitaController;
use App\Http\Controllers\PrenotazioniController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return redirect('/homepage');
    })->name('dashboard');

    Route::resource('/homepage', AttivitaController::class);
    Route::resource('/prenotazioni', PrenotazioniController::class);
    Route::resource('/attivita', AttivitaController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

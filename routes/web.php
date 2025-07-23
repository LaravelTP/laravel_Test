<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\StandsController;
use App\Models\Stand;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

// 1. Liste des stands publics
Route::get('/stands', [StandsController::class, 'index'])->name('stands.index');

Route::get('/stands/create', [StandsController::class, 'create'])->name('stands.create');


Route::get('/stands/{stand}', [StandsController::class, 'show'])->name('stands.show');

// 3. Soumission de commande
 Route::post('/stands/{stand}/commande', [PublicController::class, 'commande'])->name('stands.commande'); 

Route::post('/stands', [StandsController::class, 'store'])->name('stands.store');

require __DIR__.'/auth.php';

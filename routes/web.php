<?php

use App\Http\Controllers\IscrittoController;
use App\Http\Controllers\UserController;
use App\Models\Iscritto;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// Route::get('/iscritti', function () {
//     return view('dashboard');
// })->name('iscritti');

// Route::get('/staff', function () {
//     return view('dashboard');
// })->name('staff');

// Route::get('/iscritti/{id}', function ($id) {
//     $iscritto = Iscritto::findOrFail($id);
//     return view('iscritto', ['iscritto' => $iscritto]);
// })->name('iscritto.show');

// Route::get('/iscritti/tessera/{numero_di_tessera}', function ($numero_di_tessera) {
//     $iscritto = Iscritto::where('numero_di_tessera', $numero_di_tessera)->firstOrFail();
//     return view('iscritto', ['iscritto' => $iscritto]);
// })->name('iscritto.show.by_numero_di_tessera');

// Registrazione utente
Route::get('/register', [UserController::class, 'create'])->name('register_user_form');
Route::post('/register', [UserController::class, 'store'])->name('register_user');

// Login utente
Route::get('/login', [UserController::class, 'login_form'])->name('login_user_form');
Route::post('/login', [UserController::class, 'login'])->name('login');

// Logout utente
Route::post('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');

// Recupero iscritti
Route::get('/dashboard', [IscrittoController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/staff', [IscrittoController::class, 'index'])->name('staff')->middleware('auth');

// Registrzione e salvataggio iscritto
Route::get('/iscritti/create', [IscrittoController::class, 'create'])->name('iscritto.create')->middleware('auth');
Route::post('/iscritti', [IscrittoController::class, 'store'])->name('iscritto.store')->middleware('auth');

// Recupero iscritti
Route::get('/iscritti', [IscrittoController::class, 'index'])->name('iscritti')->middleware('auth');
Route::get('/iscritti/{id}', [IscrittoController::class, 'show'])->name('iscritto.show')->middleware('auth');

// Modifica e aggiornamento iscritto
Route::get('/iscritti/{id}/edit', [IscrittoController::class, 'edit'])->name('iscritto.edit')->middleware('auth');
Route::put('/iscritti/{id}', [IscrittoController::class, 'update'])->name('iscritto.update')->middleware('auth');

// Eliminazione iscritto
Route::delete('/iscritti/{id}', [IscrittoController::class, 'destroy'])->name('iscritto.destroy')->middleware('auth');
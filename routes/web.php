<?php

use App\Http\Controllers\UserController;
use App\Models\Iscritto;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/iscritti', function () {
    return view('dashboard');
})->name('iscritti');

Route::get('/staff', function () {
    return view('dashboard');
})->name('staff');

Route::get('/iscritti/{id}', function ($id) {
    $iscritto = Iscritto::findOrFail($id);
    return view('iscritto', ['iscritto' => $iscritto]);
})->name('iscritto.show');

// Route::get('/iscritti/tessera/{numero_di_tessera}', function ($numero_di_tessera) {
//     $iscritto = Iscritto::where('numero_di_tessera', $numero_di_tessera)->firstOrFail();
//     return view('iscritto', ['iscritto' => $iscritto]);
// })->name('iscritto.show.by_numero_di_tessera');

// Registrazione utente
Route::get('/register', [UserController::class, 'create'])->name('register_user_form');
Route::post('/register', [UserController::class, 'store'])->name('register_user');

// Login utente
Route::get('/login', [UserController::class, 'login_form'])->name('login_user_form');
Route::post('/login', [UserController::class, 'login'])->name('login_user');

// Logout utente
Route::post('/logout', [UserController::class, 'logout'])->name('logout_user');
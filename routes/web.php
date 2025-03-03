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

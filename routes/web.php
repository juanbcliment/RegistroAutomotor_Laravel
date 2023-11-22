<?php

use App\Http\Controllers\AutosController;
use App\Http\Controllers\InfraccionesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TitularesController;
use App\Models\Autos;
use App\Models\Infracciones;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('titulares', TitularesController::class);
    Route::resource('autos', AutosController::class);
    Route::resource('infracciones', InfraccionesController::class);

});

require __DIR__.'/auth.php';










<?php

use App\Http\Controllers\AutosController;
use App\Http\Controllers\InfraccionesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TitularesController;
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
});

require __DIR__.'/auth.php';



Route::controller(AutosController::class)->group(function () {
    Route::get('autos', 'index');
    Route::get('autos/create', 'create');
    Route::get('autos/edit/{id}', 'edit');
});
Route::controller(InfraccionesController::class)->group(function () {
    Route::get('infracciones', 'index');
    Route::get('infracciones/create', 'create');
    Route::get('infracciones/edit/{id}', 'edit');
});

Route::controller(TitularesController::class)->group(function () {
    Route::get('titulares', 'index');
    Route::get('titulares/create', 'create');
    Route::get('titulares/edit/{id}', 'edit');
});

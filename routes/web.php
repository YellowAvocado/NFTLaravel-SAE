<?php

use App\Http\Controllers\ProfileController;
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
    return view('auth/register');
});

Route::get('/dashboard', function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/auth/google', [\App\Http\Controllers\GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('/auth/google/call-back', [\App\Http\Controllers\GoogleAuthController::class, 'callbackGoogle'])->name('google-callback');

Route::get('/generate', [\App\Http\Controllers\ImageGeneratorController::class, 'showForm']);
Route::post('/generate', [\App\Http\Controllers\ImageGeneratorController::class, 'submitForm']);
Route::get('/generate', [\App\Http\Controllers\ImageGeneratorController::class, 'index'])->name('generate.index');

require __DIR__.'/auth.php';

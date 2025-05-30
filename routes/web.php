<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrialCustomerController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

/**
 * 試験環境用のルーティング
 */
Route::prefix('trial')->group(function () {
    Route::get('/',[TrialCustomerController::class, 'index'])->name('trial.index');
    Route::get('/create',[TrialCustomerController::class, 'create'])->name('trial.create');
    Route::post('/',[TrialCustomerController::class, 'store'])->name('trial.store');
    Route::get('/{id}',[TrialCustomerController::class, 'show'])->name('trial.show');
    Route::get('/{id}/edit',[TrialCustomerController::class, 'edit'])->name('trial.edit');
    Route::put('/{customer}',[TrialCustomerController::class, 'update'])->name('trial.update');
    Route::delete('/{id}',[TrialCustomerController::class, 'destroy'])->name('trial.destroy');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



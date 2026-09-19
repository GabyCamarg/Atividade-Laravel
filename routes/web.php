<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('role:admin')->get('/admin', function () {
    return 'Área exclusiva do administrador';
});

Route::middleware('role:professor')->get('/professor', function () {
    return 'Área exclusiva do professor';
});

Route::middleware('auth')->group(function () {
    Route::get('/alunos-crud', [\App\Http\Controllers\AlunoController::class, 'create']);
    Route::post('/alunos-crud', [\App\Http\Controllers\AlunoController::class, 'store']);
});

require __DIR__.'/auth.php';
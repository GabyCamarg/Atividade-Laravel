<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::get('/sobre', function () {
    return 'Página Sobre';
});

Route::get('/alunos', function () {
    return 'Página de Alunos';
});

Route::get('/contato', function () {
    return 'Página de Contato';
});

Route::get('/produto/{id}', function ($id) {
    return 'Produto: ' . $id;
});

Route::get('/categoria/{id}', function ($id) {
    return 'Categoria: ' . $id;
});

Route::get('/usuario/{id}', function ($id) {
    return 'Usuário: ' . $id;
});

Route::get('/alunos-crud', [AlunoController::class, 'index']);

Route::get('/alunos-crud/create', [AlunoController::class, 'create']);

Route::get('/alunos-crud/{id}', [AlunoController::class, 'show']);

Route::post('/alunos-crud', [AlunoController::class, 'store']);

Route::get('/alunos-crud/{id}/edit', [AlunoController::class, 'edit']);

Route::put('/alunos-crud/{id}', [AlunoController::class, 'update']);

Route::delete('/alunos-crud/{id}', [AlunoController::class, 'destroy']);
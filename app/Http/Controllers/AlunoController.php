<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        return 'Lista de alunos';
    }

    public function show($id)
    {
        return 'Aluno: ' . $id;
    }

    public function create()
    {
        return 'Formulário de cadastro';
    }

    public function store(Request $request)
    {
        return 'Aluno cadastrado';
    }

    public function edit($id)
    {
        return 'Editar aluno: ' . $id;
    }

    public function update(Request $request, $id)
    {
        return 'Aluno atualizado: ' . $id;
    }

    public function destroy($id)
    {
        return 'Aluno excluído: ' . $id;
    }
}
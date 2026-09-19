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

    public function porCurso($curso)
    {
        $alunos = \App\Models\Aluno::where('curso', $curso)->get();

        return $alunos;
    }

    public function porNome($nome)
    {
    
        $alunos = \App\Models\Aluno::where('nome', 'like', '%' . $nome . '%')->get();

        return $alunos;
    }
    public function recentes()
    {
        $alunos = \App\Models\Aluno::orderBy('created_at', 'desc')->get();

        return $alunos;
    }

    public function quantidade()
    {
    $quantidade = \App\Models\Aluno::count();

    return $quantidade;
    }
}
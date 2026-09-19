<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::all();

        return $alunos;
    }

    public function show($id)
    {
        $aluno = Aluno::find($id);

        return $aluno;
    }

    public function create()
    {
        return view('alunos.create');
    }

    public function store(Request $request)
    {
        $aluno = Aluno::create([
            'nome' => $request->nome,
            'curso' => $request->curso,
        ]);

        return $aluno;
    }

    public function edit($id)
    {
        $aluno = Aluno::find($id);

        return $aluno;
    }

    public function update(Request $request, $id)
    {
        $aluno = Aluno::find($id);

        $aluno->update([
            'nome' => $request->nome,
            'curso' => $request->curso,
        ]);

        return $aluno;
    }

    public function destroy($id)
    {
        $aluno = Aluno::find($id);

        $aluno->delete();

        return 'Aluno excluído com sucesso';
    }

    public function porCurso($curso)
    {
        $alunos = Aluno::where('curso', $curso)->get();

        return $alunos;
    }

    public function porNome($nome)
    {
        $alunos = Aluno::where('nome', 'like', '%' . $nome . '%')->get();

        return $alunos;
    }

    public function recentes()
    {
        $alunos = Aluno::orderBy('created_at', 'desc')->get();

        return $alunos;
    }

    public function quantidade()
    {
        $quantidade = Aluno::count();

        return $quantidade;
    }
}
@extends('layouts.app')

@section('conteudo')

<h1>Alunos do Curso: {{ $curso->nome }}</h1>

<ul>
    @foreach($curso->alunos as $aluno)
        <li>{{ $aluno->nome }}</li>
    @endforeach
</ul>

@endsection
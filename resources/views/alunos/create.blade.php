@extends('layouts.app')

@section('conteudo')

<h1>Cadastrar Aluno</h1>

<form action="/alunos-crud" method="POST">
    @csrf

    <label>Nome:</label>
    <input type="text" name="nome">

    <br><br>

    <label>Curso:</label>
    <input type="text" name="curso">

    <br><br>

    <button type="submit">Cadastrar</button>
</form>

@endsection
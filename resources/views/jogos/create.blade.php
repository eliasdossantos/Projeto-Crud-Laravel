@extends('layouts.app')

@section('title', 'Criação')

@section('content')
<!-- Tudo aqui dentro vai ser renderizado lá no nosso template -->
<div class="container mt-5">
    <h1> -- Crie um novo Jogo -- </h1>
    <hr>
    <form action="{{ route('jogos-store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" placeholder="Digite um nome...">
        </div>
        <br>
        <div class="form-group">
            <label for="categoria">Categoria:</label>
            <input type="text" class="form-control" name="categoria" placeholder="Digite uma categoria para o jogo...">
        </div>
        <br>
        <div class="form-group">
            <label for="ano_criacao">Ano Criação:</label>
            <input type="number" class="form-control" name="ano_criacao" placeholder="Ano de Criação...">
        </div>
        <br>
        <div class="form-group">
            <label for="valor">Valor:</label>
            <input type="number" class="form-control" name="valor" placeholder="Digite um valor para o jogo...">
        </div>
        <br>
        <div class="form-group">
            <input type="submit" name="submit" value="Cadastrar" class="btn btn-outline-primary">
        </div>
    </form>
</div>

@endsection

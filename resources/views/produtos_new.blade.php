@extends('template')

@section('conteudo')
<h1>Produtos (novo)</h1>
<form action="{{ route('produtos.inserir') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" 
        id="nome" name="nome" placeholder="Nome">
    </div>
    <div class="mb-3">
        <label for="preco" class="form-label">Preço</label>
        <input type="number" step="0.01" class="form-control" 
        id="preco" name="preco" placeholder="Preço" min="0">
    </div>
    <input type="submit" value="Cadastrar" class="btn btn-success">
</form>
@endsection
@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Dashboard Admin</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="mb-3">
        <a href="{{ route('admin.filmes.create') }}" class="btn btn-primary">Adicionar Novo Filme</a>
    </div>

    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Ano</th>
                <th>Categoria</th>
                <th>Imagem</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($filmes as $filme)
            <tr>
                <td>{{ $filme->id }}</td>
                <td>{{ $filme->nome }}</td>
                <td>{{ $filme->ano }}</td>
                <td>{{ $filme->categoria }}</td>
                <td><img src="{{ $filme->imagem }}" alt="{{ $filme->nome }}" style="width: 100px;"></td>
                <td>
                    <a href="{{ route('admin.filmes.edit', $filme->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form method="POST" action="{{ route('admin.filmes.destroy', $filme->id) }}" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

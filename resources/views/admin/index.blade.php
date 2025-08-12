@extends('layout')

@section('conteudo')
<h1>Administração de Filmes</h1>

<a href="{{ route('admin.filmes.create') }}" class="btn btn-success mb-3">+ Adicionar Filme</a>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Ano</th>
            <th>Categoria</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($filmes as $filme)
        <tr>
            <td>{{ $filme->nome }}</td>
            <td>{{ $filme->ano }}</td>
            <td>{{ $filme->categoria }}</td>
            <td>
                <a href="{{ route('admin.edit', $filme->id) }}" class="btn btn-warning btn-sm">Editar</a>
                <form method="POST" action="{{ route('admin.destroy', $filme->id) }}" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

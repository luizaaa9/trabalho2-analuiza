@extends('layout')

@section('conteudo')
<div class="container mt-4">

    <h1 class="mb-4 text-center">🎬 Administração de Filmes</h1>

    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('admin.create') }}" class="btn btn-success btn-lg">
            + Novo Filme
        </a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <table class="table table-hover table-striped mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>Nome</th>
                        <th>Ano</th>
                        <th>Categoria</th>
                        <th width="200">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($filmes as $filme)
                    <tr>
                        <td>{{ $filme->nome }}</td>
                        <td>{{ $filme->ano }}</td>
                        <td>{{ $filme->categoria }}</td>
                        <td>
                            <a href="{{ route('admin.edit', $filme->id) }}" 
                               class="btn btn-warning btn-sm me-1">✏ Editar</a>

                            <form method="POST" 
                                  action="{{ route('admin.destroy', $filme->id) }}" 
                                  style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Deseja realmente excluir este filme?')">
                                    🗑 Excluir
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted">Nenhum filme cadastrado.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection

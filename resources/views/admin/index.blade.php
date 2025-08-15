@extends('layouts.app')
@section('title', 'Dashboard Admin')

@section('content')
<div class="container">
    <h1 class="mb-4 text-center">🎬 Dashboard Admin</h1>

    @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    <div class="d-flex justify-content-end mb-4">
        <a href="{{ route('admin.filmes.create') }}" class="btn btn-outline-light btn-lg">+ Adicionar Filme</a>
    </div>

    <div class="row">
        @forelse($filmes as $filme)
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('storage/' . $filme->imagem) }}" class="card-img-top" style="height: 250px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $filme->nome }}</h5>
                        <p class="text-muted mb-2">{{ $filme->ano }} - {{ $filme->categoria }}</p>
                        <div class="mt-auto d-flex justify-content-between">
                            <a href="{{ route('admin.filmes.edit', $filme->id) }}" class="btn btn-outline-light btn-sm">✏ Editar</a>
                            <form method="POST" action="{{ route('admin.filmes.destroy', $filme->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-light btn-sm" onclick="return confirm('Deseja realmente excluir este filme?')">🗑 Excluir</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center">Nenhum filme cadastrado.</p>
        @endforelse
    </div>
</div>
@endsection

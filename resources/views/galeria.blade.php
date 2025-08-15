@extends('layout')

@section('conteudo')
<div class="container mt-4">

    <h1 class="mb-4 text-center">Galeria de Filmes</h1>

    <form method="GET" class="row g-3 mb-4">
        <div class="col-md-4">
            <input type="number" name="ano" class="form-control" placeholder="Ano" value="{{ request('ano') }}">
        </div>
        <div class="col-md-4">
            <input type="text" name="categoria" class="form-control" placeholder="Categoria" value="{{ request('categoria') }}">
        </div>
        <div class="col-md-4 d-grid">
            <button class="btn btn-primary btn-lg">Filtrar</button>
        </div>
    </form>

    <div class="row">
        @forelse($filmes as $filme)
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('storage/' . $filme->imagem) }}" class="card-img-top" style="height: 250px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $filme->nome }}</h5>
                        <p class="text-muted mb-2">{{ $filme->ano }} - {{ $filme->categoria }}</p>
                        <a href="{{ route('filmes.detalhes', $filme->id) }}" class="btn btn-outline-primary mt-auto">
                            Detalhes
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center text-muted">
                Nenhum filme encontrado.
            </div>
        @endforelse
    </div>

</div>
@endsection

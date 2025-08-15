@extends('layouts.app')
@section('title', 'Galeria de Filmes')

@section('content')
<div class="container">
    <h1 class="mb-4 text-center">Galeria de Filmes</h1>
    <div class="row">
        @forelse($filmes as $filme)
        <div class="col-md-3 mb-4">
    <a href="{{ route('filmes.detalhes', $filme->id) }}" class="text-decoration-none">
        <div class="card h-100 shadow-sm">
            <img src="{{ asset('storage/' . $filme->imagem) }}" 
                 class="card-img-top" 
                 style="height: 250px; object-fit: cover;">
            <div class="card-body">
                <h5 class="card-title text-white">{{ $filme->nome }}</h5>
                <p class="text-muted text-white">{{ $filme->ano }} - {{ $filme->categoria }}</p>
            </div>
        </div>
    </a>
</div>

        @empty
            <p class="text-center">Nenhum filme disponível.</p>
        @endforelse
    </div>
</div>
@endsection

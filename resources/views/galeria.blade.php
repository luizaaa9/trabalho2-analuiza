@extends('layout')

@section('conteudo')
<h1>🎥 Galeria de Filmes</h1>

<form method="GET" class="row mb-4">
    <div class="col">
        <input type="number" name="ano" class="form-control" placeholder="Ano" value="{{ request('ano') }}">
    </div>
    <div class="col">
        <input type="text" name="categoria" class="form-control" placeholder="Categoria" value="{{ request('categoria') }}">
    </div>
    <div class="col">
        <button class="btn btn-primary">Filtrar</button>
    </div>
</form>

<div class="row">
    @foreach($filmes as $filme)
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ asset('storage/' . $filme->imagem) }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{ $filme->nome }}</h5>
                    <a href="{{ route('filmes.detalhes', $filme->id) }}" class="btn btn-sm btn-outline-primary">Detalhes</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
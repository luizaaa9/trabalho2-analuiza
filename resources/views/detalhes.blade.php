@extends('layout')

@section('conteudo')
<div class="container mt-4">

    <div class="card shadow-sm mx-auto" style="max-width: 700px;">
        <img src="{{ asset('storage/' . $filme->imagem) }}" class="card-img-top" style="height: 400px; object-fit: cover;">
        <div class="card-body">
            <h2 class="card-title mb-3 text-center">{{ $filme->nome }}</h2>

            <p><strong>Ano:</strong> {{ $filme->ano }}</p>
            <p><strong>Categoria:</strong> {{ $filme->categoria }}</p>
            <p><strong>Sinopse:</strong></p>
            <p>{{ $filme->sinopse }}</p>

            <div class="text-center mt-4">
                <a href="{{ url()->previous() }}" class="btn btn-outline-primary btn-lg">
                    ← Voltar
                </a>
            </div>
        </div>
    </div>

</div>
@endsection

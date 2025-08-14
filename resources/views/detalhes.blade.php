@extends('layout')

@section('conteudo')
<h1>{{ $filme->nome }}</h1>
<img src="{{ asset('storage/' . $filme->imagem) }}" style="width: 300px;" class="mb-3">
<p><strong>Ano:</strong> {{ $filme->ano }}</p>
<p><strong>Categoria:</strong> {{ $filme->categoria }}</p>
<p><strong>Sinopse:</strong> {{ $filme->sinopse }}</p>

@endsection

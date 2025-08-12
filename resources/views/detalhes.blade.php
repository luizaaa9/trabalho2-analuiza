@extends('layout')

@section('conteudo')
<h1>{{ $filme->nome }}</h1>
<img src="{{ asset('storage/' . $filme->imagem) }}" style="width: 300px;" class="mb-3">
<p><strong>Ano:</strong> {{ $filme->ano }}</p>
<p><strong>Categoria:</strong> {{ $filme->categoria }}</p>
<p><strong>Sinopse:</strong> {{ $filme->sinopse }}</p>

@if(!empty($filme->trailer))
    @php
        $embedUrl = null;
        if (preg_match('~(?:youtube\.com\/watch\?v=|youtu\.be\/)([\w-]{11})~', $filme->trailer, $m)) {
            $embedUrl = 'https://www.youtube.com/embed/' . $m[1];
        }
    @endphp
    @if($embedUrl)
        <div class="ratio ratio-16x9 mb-3">
            <iframe src="{{ $embedUrl }}" title="Trailer" allowfullscreen></iframe>
        </div>
    @endif
    <a href="{{ $filme->trailer }}" target="_blank" class="btn btn-danger">🎬 Ver Trailer</a>
@endif
@endsection

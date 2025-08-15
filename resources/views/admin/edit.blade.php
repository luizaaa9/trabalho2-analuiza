@extends('layouts.app')
@section('title', 'Editar Filme')

@section('content')
<div class="container" style="max-width: 600px;">
    <h2 class="mb-4 text-center">Editar Filme</h2>

    <form action="{{ route('admin.filmes.update', $filme->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" name="nome" placeholder="Nome" value="{{ $filme->nome }}" required>
        <textarea name="sinopse" placeholder="Sinopse" rows="3" required>{{ $filme->sinopse }}</textarea>
        <input type="number" name="ano" placeholder="Ano" value="{{ $filme->ano }}" required>
        <input type="text" name="categoria" placeholder="Categoria" value="{{ $filme->categoria }}" required>
        <input type="file" name="imagem">
        <button type="submit" class="btn btn-outline-light w-100 mt-3">Atualizar Filme</button>
    </form>
</div>
@endsection

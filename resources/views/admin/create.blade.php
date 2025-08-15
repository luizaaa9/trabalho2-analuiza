@extends('layouts.app')
@section('title', 'Adicionar Filme')

@section('content')
<div class="container" style="max-width: 600px;">
    <h2 class="mb-4 text-center">Adicionar Novo Filme</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.filmes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="nome" placeholder="Nome" value="{{ old('nome') }}" required>
        <textarea name="sinopse" placeholder="Sinopse" rows="3" required>{{ old('sinopse') }}</textarea>
        <input type="number" name="ano" placeholder="Ano" value="{{ old('ano') }}" required>
        <input type="text" name="categoria" placeholder="Categoria" value="{{ old('categoria') }}" required>
        <input type="file" name="imagem" required>
        <button type="submit" class="btn btn-outline-light w-100 mt-3">Salvar Filme</button>
    </form>
</div>
@endsection

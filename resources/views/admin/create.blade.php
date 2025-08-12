@extends('layout')

@section('conteudo')
<h1>Adicionar Novo Filme</h1>

<form method="POST" action="{{ route('admin.filmes.store') }}" enctype="multipart/form-data">
    @csrf
    @include('admin.partials.form', ['filme' => null])
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
@endsection

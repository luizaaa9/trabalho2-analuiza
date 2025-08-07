@extends('layout')

@section('conteudo')
<h1>Editar Filme</h1>

<form method="POST" action="{{ route('admin.update', $filme->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    @include('admin.partials.form', ['filme' => $filme])
    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>
@endsection

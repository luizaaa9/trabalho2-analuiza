@extends('layout')

@section('conteudo')
<div class="container mt-4">

    <h1 class="mb-4 text-center">✏ Editar Filme</h1>

    <div class="card shadow-sm p-4">
        <form method="POST" action="{{ route('admin.filmes.update', $filme->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            @include('admin.partials.form', ['filme' => $filme])

            <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary btn-lg">
                    Atualizar
                </button>
            </div>
        </form>
    </div>

</div>
@endsection

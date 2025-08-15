@extends('layout')

@section('conteudo')
<div class="container mt-4">

    <h1 class="mb-4 text-center">🎬 Adicionar Novo Filme</h1>

    <div class="card shadow-sm p-4">
        <form method="POST" action="{{ route('admin.filmes.store') }}" enctype="multipart/form-data">
            @csrf

            @include('admin.partials.form', ['filme' => null])

            <div class="text-center mt-3">
                <button type="submit" class="btn btn-success btn-lg">
                    Salvar
                </button>
            </div>
        </form>
    </div>

</div>
@endsection

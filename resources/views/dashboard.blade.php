@extends('layouts.app')
@section('title', 'Dashboard Admin')

@section('content')
<div class="container py-4">
    <h1 class="mb-5 text-center display-5">Administração</h1>

    @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    <div class="d-flex justify-content-end mb-4">
        <a href="{{ route('admin.filmes.create') }}" class="btn btn-outline-light btn-lg">+ Adicionar Filme</a>
    </div>
    
</div>
@endsection

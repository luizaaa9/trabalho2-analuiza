
<div class="mb-3">
    <label>Nome</label>
    <input type="text" name="nome" class="form-control" value="{{ old('nome', $filme->nome ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Sinopse</label>
    <textarea name="sinopse" class="form-control" required>{{ old('sinopse', $filme->sinopse ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label>Ano</label>
    <input type="number" name="ano" class="form-control" value="{{ old('ano', $filme->ano ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Categoria</label>
    <input type="text" name="categoria" class="form-control" value="{{ old('categoria', $filme->categoria ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Trailer (URL do YouTube)</label>
    <input type="url" name="trailer" class="form-control" value="{{ old('trailer', $filme->trailer ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Imagem da Capa {{ isset($filme) ? '(Deixe em branco se não for alterar)' : '' }}</label>
    <input type="file" name="imagem" class="form-control" {{ isset($filme) ? '' : 'required' }}>
</div>

@if(isset($filme) && $filme->imagem)
    <div class="mb-3">
        <img src="{{ asset('storage/' . $filme->imagem) }}" width="200">
    </div>
@endif

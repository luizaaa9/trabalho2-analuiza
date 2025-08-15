<div class="mb-3">
    <label class="form-label fw-bold">Nome</label>
    <input type="text" name="nome" class="form-control" value="{{ old('nome', $filme->nome ?? '') }}" required>
</div>

<div class="mb-3">
    <label class="form-label fw-bold">Sinopse</label>
    <textarea name="sinopse" class="form-control" rows="4" required>{{ old('sinopse', $filme->sinopse ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label fw-bold">Ano</label>
    <input type="number" name="ano" class="form-control" value="{{ old('ano', $filme->ano ?? '') }}" required>
</div>

<div class="mb-3">
    <label class="form-label fw-bold">Categoria</label>
    <input type="text" name="categoria" class="form-control" value="{{ old('categoria', $filme->categoria ?? '') }}" required>
</div>

<div class="mb-3">
    <label class="form-label fw-bold">
        Imagem da Capa {{ isset($filme) ? '(Deixe em branco se não for alterar)' : '' }}
    </label>
    <input type="file" name="imagem" class="form-control" {{ isset($filme) ? '' : 'required' }}>
</div>

@if(isset($filme) && $filme->imagem)
    <div class="mb-3">
        <p class="fw-bold">Capa atual:</p>
        <img src="{{ asset('storage/' . $filme->imagem) }}" width="200" class="img-thumbnail">
    </div>
@endif

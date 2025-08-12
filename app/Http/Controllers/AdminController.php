<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Listar todos os filmes (index)
    public function index()
    {
        $filmes = Filme::all();
        return view('admin.filmes.index', compact('filmes'));
    }

    // Mostrar formulário para criar filme (create)
    public function create()
    {
        return view('admin.filmes.create');
    }

    // Salvar filme no banco (store)
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'sinopse' => 'required|string',
            'ano' => 'required|integer',
            'categoria' => 'required|string|max:100',
            'imagem' => 'nullable|image',
            'trailer' => 'nullable|url',
        ]);

        $filme = new Filme();
        $filme->nome = $request->nome;
        $filme->sinopse = $request->sinopse;
        $filme->ano = $request->ano;
        $filme->categoria = $request->categoria;

        // Se tiver upload de imagem
        if ($request->hasFile('imagem')) {
            $path = $request->file('imagem')->store('public/imagens');
            $filme->imagem = basename($path);
        }

        $filme->trailer = $request->trailer ?? null;

        $filme->save();

        return redirect()->route('admin.filmes.index')->with('success', 'Filme criado com sucesso!');
    }

    // Mostrar formulário para editar filme (edit)
    public function edit(Filme $filme)
    {
        return view('admin.filmes.edit', compact('filme'));
    }

    // Atualizar filme no banco (update)
    public function update(Request $request, Filme $filme)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'sinopse' => 'required|string',
            'ano' => 'required|integer',
            'categoria' => 'required|string|max:100',
            'imagem' => 'nullable|image',
            'trailer' => 'nullable|url',
        ]);

        $filme->nome = $request->nome;
        $filme->sinopse = $request->sinopse;
        $filme->ano = $request->ano;
        $filme->categoria = $request->categoria;

        if ($request->hasFile('imagem')) {
            $path = $request->file('imagem')->store('public/imagens');
            $filme->imagem = basename($path);
        }

        $filme->trailer = $request->trailer ?? null;

        $filme->save();

        return redirect()->route('admin.filmes.index')->with('success', 'Filme atualizado com sucesso!');
    }

    // Excluir filme (destroy)
    public function destroy(Filme $filme)
    {
        $filme->delete();
        return redirect()->route('admin.filmes.index')->with('success', 'Filme excluído com sucesso!');
    }
}

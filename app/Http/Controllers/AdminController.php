<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $filmes = Filme::all();
        return view('admin.index', compact('filmes'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'sinopse' => 'required|string',
            'ano' => 'required|integer',
            'categoria' => 'required|string',
            'imagem' => 'required|image',
        ]);

        Filme::create($request->all());

        return redirect()->route('admin.filmes.index')->with('success', 'Filme cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $filme = Filme::findOrFail($id);
        return view('admin.filmes.edit', compact('filme'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'sinopse' => 'required|string',
            'ano' => 'required|integer',
            'categoria' => 'required|string',
            'imagem' => 'required|string',
        ]);

        $filme = Filme::findOrFail($id);
        $filme->update($request->all());

        return redirect()->route('admin.filmes.index')->with('success', 'Filme atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $filme = Filme::findOrFail($id);
        $filme->delete();

        return redirect()->route('admin.filmes.index')->with('success', 'Filme excluído com sucesso!');
    }
}

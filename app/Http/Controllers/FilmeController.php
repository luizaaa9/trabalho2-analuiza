<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filme;


class FilmeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
        $dados = $request->validate([
            'nome' => 'required',
            'sinopse' => 'required',
            'ano' => 'required|digits:4',
            'categoria' => 'required',
            'imagem' => 'required|image',
        ]);
    
        $imagemPath = $request->file('imagem')->store('imagens', 'public');
        $dados['imagem'] = $imagemPath;
    
        Filme::create($dados);
        return redirect()->route('admin.index');
    }
    
    public function edit($id)
    {
        $filme = Filme::findOrFail($id);
        return view('admin.edit', compact('filme'));
    }
    
    public function update(Request $request, $id)
    {
        $filme = Filme::findOrFail($id);
    
        $dados = $request->validate([
            'nome' => 'required',
            'sinopse' => 'required',
            'ano' => 'required|digits:4',
            'categoria' => 'required',
        ]);
    
        if ($request->hasFile('imagem')) {
            $imagemPath = $request->file('imagem')->store('imagens', 'public');
            $dados['imagem'] = $imagemPath;
        }
    
        $filme->update($dados);
        return redirect()->route('admin.index');
    }
    
    public function destroy($id)
    {
        $filme = Filme::findOrFail($id);
        $filme->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Filme excluído com sucesso!');
    }
    
    

    public function galeria(Request $request)
{
    $query = Filme::query();

    if ($request->has('ano')) {
        $query->where('ano', $request->ano);
    }

    if ($request->has('categoria')) {
        $query->where('categoria', $request->categoria);
    }

    $filmes = $query->get();
    return view('galeria', compact('filmes'));
}
public function detalhes($id)
{
    $filme = Filme::findOrFail($id);
    return view('detalhes', compact('filme'));
}

}

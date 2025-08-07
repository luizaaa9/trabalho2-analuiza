<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Filme;

class FilmeSeeder extends Seeder
{
 
public function run()
{
    Filme::create([
        'nome' => 'Clube da Luta',
        'sinopse' => 'Um homem insatisfeito forma um clube secreto de luta.',
        'ano' => 1999,
        'categoria' => 'Drama',
        'imagem' => 'clube-da-luta.jpg',
        'trailer' => 'https://www.youtube.com/watch?v=SUXWAEX2jlg',
    ]);
    
    Filme::create([
        'nome' => 'Piratas do Caribe',
        'sinopse' => 'Acompanhe as aventura de Jack Sparow',
        'ano' => 2003,
        'categoria' => 'Comédia',
        'imagem' => 'piratas-do-caibe.jpg',
        'trailer' => 'https://www.youtube.com/watch?v=SUXWAEX2jlg',
    ]);
}

}

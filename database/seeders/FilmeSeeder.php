<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Filme;

class FilmeSeeder extends Seeder
{
    public function run()
    {
        $filmes = [
            [
                'nome' => 'O Poderoso Chefão',
                'sinopse' => 'A história da família mafiosa Corleone, liderada por Vito Corleone.',
                'ano' => 1972,
                'categoria' => 'Crime',
                'imagem' => 'https://upload.wikimedia.org/wikipedia/en/1/1c/Godfather_ver1.jpg',
            ],
            [
                'nome' => 'Pulp Fiction',
                'sinopse' => 'Vidas interligadas de criminosos, boxeadores e gangsters em Los Angeles.',
                'ano' => 1994,
                'categoria' => 'Crime',
                'imagem' => 'https://upload.wikimedia.org/wikipedia/en/8/82/Pulp_Fiction_cover.jpg',
            ],
            [
                'nome' => 'O Senhor dos Anéis: A Sociedade do Anel',
                'sinopse' => 'Frodo e seus amigos começam a jornada para destruir o Um Anel.',
                'ano' => 2001,
                'categoria' => 'Fantasia',
                'imagem' => 'https://upload.wikimedia.org/wikipedia/en/8/87/Ringstrilogyposter.jpg',
            ],
            [
                'nome' => 'O Senhor dos Anéis: As Duas Torres',
                'sinopse' => 'A jornada de Frodo continua enquanto a guerra pela Terra Média se intensifica.',
                'ano' => 2002,
                'categoria' => 'Fantasia',
                'imagem' => 'https://upload.wikimedia.org/wikipedia/en/8/8e/Lord_of_the_Rings_-_The_Two_Towers.jpg',
            ],
            [
                'nome' => 'O Senhor dos Anéis: O Retorno do Rei',
                'sinopse' => 'O confronto final entre o bem e o mal na Terra Média.',
                'ano' => 2003,
                'categoria' => 'Fantasia',
                'imagem' => 'https://upload.wikimedia.org/wikipedia/en/9/9d/LOTR_-_The_Return_of_the_King.jpg',
            ],
            [
                'nome' => 'Forrest Gump',
                'sinopse' => 'A história de Forrest, um homem simples que presencia e influencia eventos históricos.',
                'ano' => 1994,
                'categoria' => 'Drama',
                'imagem' => 'https://upload.wikimedia.org/wikipedia/en/6/67/Forrest_Gump_poster.jpg',
            ],
            [
                'nome' => 'Matrix',
                'sinopse' => 'Neo descobre a verdade sobre o mundo e a guerra contra as máquinas.',
                'ano' => 1999,
                'categoria' => 'Ficção Científica',
                'imagem' => 'https://upload.wikimedia.org/wikipedia/en/c/c1/The_Matrix_Poster.jpg',
            ],
            [
                'nome' => 'Gladiador',
                'sinopse' => 'Maximus busca vingança após ser traído e ver sua família morta.',
                'ano' => 2000,
                'categoria' => 'Ação',
                'imagem' => 'https://upload.wikimedia.org/wikipedia/en/8/8d/Gladiator_ver1.jpg',
            ],
            [
                'nome' => 'Titanic',
                'sinopse' => 'O romance entre Jack e Rose a bordo do trágico navio Titanic.',
                'ano' => 1997,
                'categoria' => 'Romance',
                'imagem' => 'https://upload.wikimedia.org/wikipedia/en/2/2e/Titanic_poster.jpg',
            ],
            [
                'nome' => 'Jurassic Park',
                'sinopse' => 'Um parque temático com dinossauros clonados sofre um desastre.',
                'ano' => 1993,
                'categoria' => 'Aventura',
                'imagem' => 'https://upload.wikimedia.org/wikipedia/en/e/e7/Jurassic_Park_poster.jpg',
            ],
            [
                'nome' => 'O Cavaleiro das Trevas',
                'sinopse' => 'Batman enfrenta o Coringa em uma luta pelo controle de Gotham.',
                'ano' => 2008,
                'categoria' => 'Ação',
                'imagem' => 'https://upload.wikimedia.org/wikipedia/en/8/8a/Dark_Knight.jpg',
            ],
            [
                'nome' => 'Interestelar',
                'sinopse' => 'Um grupo de astronautas viaja pelo espaço para salvar a humanidade.',
                'ano' => 2014,
                'categoria' => 'Ficção Científica',
                'imagem' => 'https://upload.wikimedia.org/wikipedia/en/b/bc/Interstellar_film_poster.jpg',
            ],
            [
                'nome' => 'A Origem',
                'sinopse' => 'Dom Cobb invade sonhos para realizar crimes corporativos complexos.',
                'ano' => 2010,
                'categoria' => 'Ficção Científica',
                'imagem' => 'https://upload.wikimedia.org/wikipedia/en/7/7f/Inception_ver3.jpg',
            ],
            [
                'nome' => 'Vingadores: Ultimato',
                'sinopse' => 'Os heróis tentam desfazer o estalo de Thanos e salvar o universo.',
                'ano' => 2019,
                'categoria' => 'Ação',
                'imagem' => 'https://upload.wikimedia.org/wikipedia/en/0/0d/Avengers_Endgame_poster.jpg',
            ],
            [
                'nome' => 'O Rei Leão',
                'sinopse' => 'Simba deve aceitar seu destino como rei da savana após a morte de seu pai.',
                'ano' => 1994,
                'categoria' => 'Animação',
                'imagem' => 'https://upload.wikimedia.org/wikipedia/en/3/3d/The_Lion_King_poster.jpg',
            ],
            [
                'nome' => 'Toy Story',
                'sinopse' => 'Os brinquedos de Andy ganham vida quando os humanos não estão por perto.',
                'ano' => 1995,
                'categoria' => 'Animação',
                'imagem' => 'https://upload.wikimedia.org/wikipedia/en/1/13/Toy_Story.jpg',
            ],
            [
                'nome' => 'Procurando Nemo',
                'sinopse' => 'Marlin atravessa o oceano para encontrar seu filho perdido, Nemo.',
                'ano' => 2003,
                'categoria' => 'Animação',
                'imagem' => 'https://upload.wikimedia.org/wikipedia/en/2/29/Finding_Nemo.jpg',
            ],
            [
                'nome' => 'Harry Potter e a Pedra Filosofal',
                'sinopse' => 'Harry descobre que é um bruxo e começa sua jornada em Hogwarts.',
                'ano' => 2001,
                'categoria' => 'Fantasia',
                'imagem' => 'https://upload.wikimedia.org/wikipedia/en/6/6b/Harry_Potter_and_the_Philosopher%27s_Stone_poster.jpg',
            ],
            [
                'nome' => 'Harry Potter e a Câmara Secreta',
                'sinopse' => 'Harry enfrenta novos desafios e segredos dentro de Hogwarts.',
                'ano' => 2002,
                'categoria' => 'Fantasia',
                'imagem' => 'https://upload.wikimedia.org/wikipedia/en/f/f1/Harry_Potter_and_the_Chamber_of_Secrets.jpg',
            ],
            [
                'nome' => 'Harry Potter e o Prisioneiro de Azkaban',
                'sinopse' => 'Harry descobre segredos sombrios e enfrenta Sirius Black.',
                'ano' => 2004,
                'categoria' => 'Fantasia',
                'imagem' => 'https://upload.wikimedia.org/wikipedia/en/3/3f/Harry_Potter_and_the_Prisoner_of_Azkaban.jpg',
            ],
        ];

        foreach ($filmes as $filme) {
            Filme::create($filme);
        }
    }
}

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Catálogo de Filmes')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #111;
            color: #fff;
            font-family: Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        a {
            text-decoration: none;
        }
        .card {
            background-color: #1a1a1a;
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
        }
        .btn-outline-light {
            color: #fff;
            border-color: #fff;
        }
        .btn-outline-light:hover {
            background-color: #fff;
            color: #111;
        }
        footer {
            background-color: #1a1a1a;
            padding: 15px 0;
            text-align: center;
            margin-top: auto;
        }
        input, select, textarea {
            background-color: #222;
            color: #fff;
            border: 1px solid #444;
            border-radius: 5px;
            padding: 8px;
            width: 100%;
            margin-bottom: 10px;
        }
        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: #fff;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('dashboard') }}"> Filmes</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('filmes.galeria') }}">Galeria</a>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="btn btn-outline-light btn-sm">Sair</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="flex-grow-1 py-4">
        @yield('content')
    </main>

    <footer>
        &copy; {{ date('Y') }} Catálogo de Filmes. Todos os direitos reservados.
    </footer>
</body>
</html>

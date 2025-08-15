<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Filmes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Nunito', sans-serif;
        }
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }
        .btn-outline-light {
            border-radius: 50px;
            padding: 5px 20px;
        }
        footer {
            margin-top: 50px;
            padding: 20px 0;
            text-align: center;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark p-3 shadow-sm">
        <div class="container">
            <a href="/" class="navbar-brand"> Galeria</a>
            <a href="/admin" class="btn btn-outline-light">Admin</a>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('conteudo')
    </div>

    <footer>
        &copy; {{ date('Y') }} Sistema de Filmes. Todos os direitos reservados.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

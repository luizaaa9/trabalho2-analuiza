<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Filmes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark p-3">
        <div class="container">
            <a href="/" class="navbar-brand">🎬 Galeria</a>
            <a href="/admin" class="btn btn-outline-light">Admin</a>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('conteudo')
    </div>
</body>
</html>

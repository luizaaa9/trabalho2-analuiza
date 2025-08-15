<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #ff4d6d, #ff80a1);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-family: Arial, sans-serif;
        }
        .card {
            background: rgba(255, 255, 255, 0.15);
            border: none;
            backdrop-filter: blur(10px);
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0px 8px 20px rgba(0,0,0,0.2);
        }
        .btn-custom {
            background-color: white;
            color: #ff4d6d;
            border-radius: 50px;
            font-weight: bold;
            padding: 10px 30px;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background-color: #ff4d6d;
            color: white;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1 class="mb-4"> Bem-vindo ao Catálogo de Filmes</h1>
        <p class="mb-4">Organize, descubra e explore nossos filmes de forma fácil e divertida.</p>
        <a href="{{ route('dashboard') }}" class="btn btn-custom btn-lg">Entrar</a>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff; /* fundo branco */
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Arial', sans-serif;
            margin: 0;
        }

        .card {
            background: rgba(0, 0, 0, 0.85); /* card escuro para contraste */
            color: #ffffff; /* letras brancas */
            border-radius: 15px;
            padding: 2rem 3rem;
            text-align: center;
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
            max-width: 400px;
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #ffffff;
        }

        p {
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
            color: #f0f0f0;
        }

        .btn-custom {
            background-color: #ffffff;
            color: #000000;
            border-radius: 25px;
            font-weight: bold;
            padding: 10px 25px;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #000000;
            color: #ffffff;
        }

        @media (max-width: 576px) {
            .card {
                padding: 1.5rem 2rem;
            }

            h1 {
                font-size: 1.5rem;
            }

            p {
                font-size: 1rem;
            }

            .btn-custom {
                padding: 8px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Bem-vindo ao Catálogo de Filmes</h1>
        <p>Explore nossos filmes de forma rápida e divertida.</p>
        <a href="{{ route('dashboard') }}" class="btn btn-custom btn-lg">Entrar</a>
    </div>
</body>
</html>

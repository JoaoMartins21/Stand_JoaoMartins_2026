<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stand Automóveis</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <style>
        body {
            background-image: url('/fundo.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
        }
    </style>

    <style>
        body {
            background-image: linear-gradient(rgba(0, 0, 0, 0.6),
                    rgba(0, 0, 0, 0.6)),
                url('/fundo.jpg');

            background-size: cover;
            background-position: center;
            min-height: 100vh;
        }
    </style>

    <div class="container text-center mt-5">

        <h1 class="text-white display-3">
            🚗 Stand Automóveis
        </h1>

        <p class="text-white">
            Sistema de gestão de clientes, viaturas e vendas.
        </p>

        <a href="{{ route('dashboard') }}" class="btn btn-primary btn-lg">
            Página Menu
        </a>

    </div>

</body>

</html>

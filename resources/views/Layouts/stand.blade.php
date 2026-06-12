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
            background-image:
                linear-gradient(rgba(0, 0, 0, 0.35),
                    rgba(0, 0, 0, 0.35)),
                url('/fundomenu.jpg');

            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }
    </style>






    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">

            <a class="navbar-brand" href="{{ route('dashboard') }}">
                🚗 Stand Automóveis
            </a>

            <div class="navbar-nav ms-auto">

                <a class="nav-link" href="{{ route('dashboard') }}">
                    🏠 Menu Principal
                </a>

                <a class="nav-link" href="{{ route('clientes.index') }}">
                    👤 Clientes
                </a>

                <a class="nav-link" href="{{ route('viaturas.index') }}">
                    🚗 Viaturas
                </a>

                <a class="nav-link" href="{{ route('vendas.index') }}">
                    💰 Vendas
                </a>

                <form method="POST" action="{{ route('logout') }}" class="d-flex align-items-center ms-3">

                    @csrf

                    <button type="submit" class="btn btn-danger btn-sm">
                        Logout
                    </button>

                </form>
            </div>

        </div>
    </nav>

    <div class="container mt-4">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')

    </div>

</body>

</html>

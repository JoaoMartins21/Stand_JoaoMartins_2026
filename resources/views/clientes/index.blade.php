@extends('layouts.stand')

@section('content')
    <h1 class="mb-4 text-white" style="text-shadow: 2px 2px 8px black;">
        👥 Clientes
    </h1>

    <a href="{{ route('clientes.create') }}" class="btn btn-dark mb-3">
        Novo Cliente
    </a>

    <table class="table table-striped table-hover">
        <thead class="table-dark">

            <form method="GET" action="{{ route('clientes.index') }}" class="mb-3">
                <div class="input-group">
                    <input type="text" name="pesquisa" class="form-control" placeholder="Pesquisar cliente..."
                        value="{{ request('pesquisa') }}">

                    <button class="btn btn-dark" type="submit">
                        Pesquisar
                    </button>
                </div>
            </form>
            <br>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>NIF</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->nome }}</td>
                    <td>{{ $cliente->email }}</td>
                    <td>{{ $cliente->telefone }}</td>
                    <td>{{ $cliente->nif }}</td>
                    <td>
                        <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-dark btn-sm">
                            Ver
                        </a>

                        <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-dark btn-sm">
                            Editar
                        </a>

                        <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" class="d-inline">

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Tem a certeza que pretende eliminar este cliente?')">
                                Eliminar
                            </button>

                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-3">
        <a href="{{ route('dashboard') }}" class="btn btn-dark">
            ← Voltar ao Menu
        </a>
    </div>
@endsection

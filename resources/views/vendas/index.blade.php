@extends('layouts.stand')

@section('content')
    <h1 class="mb-4 text-white" style="text-shadow: 2px 2px 8px black;">
        💰 Vendas
    </h1>

    <a href="{{ route('vendas.create') }}" class="btn btn-dark mb-3">
        Nova Venda
    </a>

    <table class="table table-striped table-hover">

        <thead class="table-dark">

            <form method="GET" action="{{ route('vendas.index') }}" class="mb-3">
                <div class="input-group">
                    <input type="text" name="pesquisa" class="form-control" placeholder="Pesquisar venda..."
                        value="{{ request('pesquisa') }}">

                    <button class="btn btn-dark" type="submit">
                        Pesquisar
                    </button>
                </div>
            </form>
            <br>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Viatura</th>
                <th>Data</th>
                <th>Valor</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($vendas as $venda)
                <tr>

                    <td>{{ $venda->id }}</td>

                    <td>{{ $venda->cliente->nome }}</td>

                    <td>
                        {{ $venda->viatura->marca }}
                        {{ $venda->viatura->modelo }}
                    </td>

                    <td>{{ $venda->data_venda }}</td>

                    <td>{{ $venda->valor_venda }} €</td>

                    <td>

                        <a href="{{ route('vendas.show', $venda->id) }}" class="btn btn-dark btn-sm">
                            Ver
                        </a>

                        <a href="{{ route('vendas.edit', $venda->id) }}" class="btn btn-dark btn-sm">
                            Editar
                        </a>

                        <form action="{{ route('vendas.destroy', $venda->id) }}" method="POST" class="d-inline">

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Tem a certeza que pretende eliminar esta venda?')">
                                Eliminar
                            </button>

                        </form>

                    </td>

                </tr>
            @endforeach

        </tbody>

    </table>
@endsection

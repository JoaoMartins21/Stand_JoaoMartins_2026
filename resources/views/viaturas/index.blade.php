@extends('layouts.stand')

@section('content')
    <h1 class="mb-4 text-white" style="text-shadow: 2px 2px 8px black;">
        🚗 Viaturas
    </h1>

    <a href="{{ route('viaturas.create') }}" class="btn btn-dark mb-3">
        Nova Viatura
    </a>

    <table class="table table-striped table-hover">

        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Fotografia</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Matrícula</th>
                <th>Ano</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($viaturas as $viatura)
                <tr>
                    <td>{{ $viatura->id }}</td>

                    <td>
                        @if ($viatura->foto)
                            <img src="{{ asset('storage/' . $viatura->foto) }}" width="80" class="img-thumbnail">
                        @else
                            Sem foto
                        @endif
                    </td>

                    <td>{{ $viatura->marca }}</td>
                    <td>{{ $viatura->modelo }}</td>
                    <td>{{ $viatura->matricula }}</td>
                    <td>{{ $viatura->ano }}</td>
                    <td>{{ $viatura->preco }} €</td>

                    <td>
                        <a href="{{ route('viaturas.show', $viatura->id) }}" class="btn btn-dark btn-sm">
                            Ver
                        </a>

                        <a href="{{ route('viaturas.edit', $viatura->id) }}" class="btn btn-dark btn-sm">
                            Editar
                        </a>

                        <form action="{{ route('viaturas.destroy', $viatura->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm"

                                onclick="return confirm('Tem a certeza que pretende eliminar esta viatura?')">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>

    </table>
@endsection

@extends('layouts.stand')

@section('content')
    <h1 class="mb-4 text-white" style="text-shadow: 2px 2px 8px black;">
        👤 Detalhes do Cliente
    </h1>

    <div class="card shadow">
        <div class="card-body">

            <p><strong>ID:</strong> {{ $cliente->id }}</p>

            <p><strong>Nome:</strong> {{ $cliente->nome }}</p>

            <p><strong>Email:</strong> {{ $cliente->email }}</p>

            <p><strong>Telefone:</strong> {{ $cliente->telefone }}</p>

            <p><strong>Morada:</strong> {{ $cliente->morada }}</p>

            <p><strong>NIF:</strong> {{ $cliente->nif }}</p>

            <a href="{{ route('clientes.index') }}" class="btn btn-dark">
                Voltar
            </a>

            <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning">
                Editar
            </a>
        </div>
    </div>
@endsection

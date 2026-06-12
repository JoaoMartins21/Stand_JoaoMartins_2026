@extends('layouts.stand')

@section('content')
    <h1 class="mb-4 text-white" style="text-shadow: 2px 2px 8px black;">
        ✏️ Editar Cliente
    </h1>

    <div class="card shadow">
        <div class="card-body">

            <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" name="nome" class="form-control" value="{{ $cliente->nome }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $cliente->email }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Telefone</label>
                    <input type="text" name="telefone" class="form-control" value="{{ $cliente->telefone }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Morada</label>
                    <input type="text" name="morada" class="form-control" value="{{ $cliente->morada }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">NIF</label>
                    <input type="text" name="nif" class="form-control" value="{{ $cliente->nif }}">
                </div>

                <button type="submit" class="btn btn-dark">
                    Guardar Alterações
                </button>

                <a href="{{ route('clientes.index') }}" class="btn btn-secondary">
                    Cancelar
                </a>

            </form>

        </div>
    </div>
@endsection

@extends('layouts.stand')

@section('content')
    <div class="container">

        <h1 class="mb-4 text-white" style="text-shadow: 2px 2px 8px black;">
            👤 Novo Cliente
        </h1>

        <div class="card shadow">
            <div class="card-body">

                <form action="{{ route('clientes.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text" name="nome" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Telefone</label>
                        <input type="text" name="telefone" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Morada</label>
                        <input type="text" name="morada" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">NIF</label>
                        <input type="text" name="nif" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-success">
                        Guardar Cliente
                    </button>

                    <a href="{{ route('clientes.index') }}" class="btn btn-secondary">
                        Cancelar
                    </a>

                </form>

            </div>
        </div>

    </div>
@endsection

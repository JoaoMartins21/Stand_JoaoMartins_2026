@extends('layouts.stand')

@section('content')
    <div class="container mt-4">

        <h1 class="mb-4">🚗 Detalhes da Viatura</h1>

        <div class="card shadow">
            <div class="card-body">

                <div class="row">

                    <div class="col-md-6">

                        <p><strong>Marca:</strong> {{ $viatura->marca }}</p>

                        <p><strong>Modelo:</strong> {{ $viatura->modelo }}</p>

                        <p><strong>Matrícula:</strong> {{ $viatura->matricula }}</p>

                        <p><strong>Ano:</strong> {{ $viatura->ano }}</p>

                        <p><strong>Quilómetros:</strong> {{ $viatura->quilometros }}</p>

                        <p><strong>Preço:</strong> {{ $viatura->preco }} €</p>

                        <p><strong>Estado:</strong> {{ $viatura->estado }}</p>

                        <a href="{{ route('viaturas.index') }}" class="btn btn-secondary">
                            Voltar
                        </a>

                        <a href="{{ route('viaturas.edit', $viatura->id) }}" class="btn btn-warning">
                            Editar
                        </a>

                    </div>

                    <div class="col-md-6 text-center">

                        @if ($viatura->foto)
                            <img src="{{ asset('storage/' . $viatura->foto) }}" alt="Fotografia da Viatura"
                                class="img-fluid rounded shadow" style="max-height: 450px;">
                        @endif

                    </div>

                </div>

            </div>
        </div>

    </div>
@endsection

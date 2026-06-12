@extends('layouts.stand')

@section('content')
    <div class="text-center mt-5">

        <h1 class="mb-3 text-white" style="text-shadow: 2px 2px 8px black;">
            🚗 Stand Automóveis
        </h1>

        <p class="lead text-white" style="text-shadow: 1px 1px 5px black;">
            Sistema de Gestão de Clientes, Viaturas e Vendas
        </p>

    </div>

    <div class="row justify-content-center mt-4">

        <div class="col-md-4 mb-3">
            <div class="card shadow text-center">
                <div class="card-body">
                    <h3>👥 Clientes</h3>
                    <p>Gerir clientes</p>

                    <a href="{{ route('clientes.index') }}" class="btn btn-dark">
                        Aceder
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card shadow text-center">
                <div class="card-body">
                    <h3>🚗 Viaturas</h3>
                    <p>Gerir viaturas</p>

                    <a href="{{ route('viaturas.index') }}" class="btn btn-dark">
                        Aceder
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card shadow text-center">
                <div class="card-body">
                    <h3>💰 Vendas</h3>
                    <p>Gerir vendas</p>

                    <a href="{{ route('vendas.index') }}" class="btn btn-dark">
                        Aceder
                    </a>
                </div>
            </div>
        </div>

    </div>
@endsection

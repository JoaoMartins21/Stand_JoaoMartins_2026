@extends('layouts.stand')

@section('content')
    <h1 class="mb-4 text-white" style="text-shadow: 2px 2px 8px black;">
        💰 Detalhes da Venda
    </h1>

    <div class="card shadow">
        <div class="card-body">

            <div class="row">

                <div class="col-md-6">

                    <p>
                        <strong>Cliente:</strong>
                        {{ $venda->cliente->nome }}
                    </p>

                    <p>
                        <strong>Viatura:</strong>
                        {{ $venda->viatura->marca }}
                        {{ $venda->viatura->modelo }}
                    </p>

                    <p>
                        <strong>Data da Venda:</strong>
                        {{ $venda->data_venda }}
                    </p>

                    <p>
                        <strong>Valor:</strong>
                        {{ $venda->valor_venda }} €
                    </p>

                    <a href="{{ route('vendas.index') }}" class="btn btn-dark">
                        Voltar
                    </a>

                    <a href="{{ route('vendas.edit', $venda->id) }}" class="btn btn-warning">
                        Editar
                    </a>

                </div>

                <div class="col-md-6 text-center">

                    @if($venda->viatura->foto)
                        <img src="{{ asset('storage/' . $venda->viatura->foto) }}"
                             alt="Fotografia da Viatura"
                             class="img-fluid rounded shadow"
                             style="max-height: 450px;">
                    @endif

                </div>

            </div>

        </div>
    </div>
@endsection

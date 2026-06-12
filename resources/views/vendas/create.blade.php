@extends('layouts.stand')

@section('content')
    <h1 class="mb-4 text-white" style="text-shadow: 2px 2px 8px black;">
        💰 Nova Venda
    </h1>

    <form action="{{ route('vendas.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label class="form-label">Cliente</label>

            <select name="cliente_id" class="form-control" required>

                <option value="">Selecione um cliente</option>

                @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->id }}">
                        {{ $cliente->nome }}
                    </option>
                @endforeach

            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Viatura</label>

            <select name="viatura_id" class="form-control" required>

                <option value="">Selecione uma viatura</option>

                @foreach ($viaturas as $viatura)
                    <option value="{{ $viatura->id }}">
                        {{ $viatura->marca }} {{ $viatura->modelo }}
                    </option>
                @endforeach

            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Data da Venda</label>

            <input type="date" name="data_venda" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Valor da Venda (€)</label>

            <input type="number" step="0.01" name="valor_venda" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-dark">
            Registar Venda
        </button>

        <a href="{{ route('vendas.index') }}" class="btn btn-secondary">
            Cancelar
        </a>

    </form>
@endsection

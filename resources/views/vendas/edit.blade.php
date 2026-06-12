@extends('layouts.stand')

@section('content')
    <h1 class="mb-4 text-white" style="text-shadow: 2px 2px 8px black;">
        ✏️ Editar Venda
    </h1>

    <form action="{{ route('vendas.update', $venda->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Cliente</label>

            <select name="cliente_id" class="form-control">

                @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->id }}" {{ $venda->cliente_id == $cliente->id ? 'selected' : '' }}>

                        {{ $cliente->nome }}

                    </option>
                @endforeach

            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Viatura</label>

            <select name="viatura_id" class="form-control">

                @foreach ($viaturas as $viatura)
                    <option value="{{ $viatura->id }}" {{ $venda->viatura_id == $viatura->id ? 'selected' : '' }}>

                        {{ $viatura->marca }}
                        {{ $viatura->modelo }}

                    </option>
                @endforeach

            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Data da Venda</label>

            <input type="date" name="data_venda" class="form-control" value="{{ $venda->data_venda }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Valor (€)</label>

            <input type="number" step="0.01" name="valor_venda" class="form-control" value="{{ $venda->valor_venda }}">
        </div>

        <button type="submit" class="btn btn-dark">
            Guardar Alterações
        </button>

        <a href="{{ route('vendas.index') }}" class="btn btn-secondary">
            Cancelar
        </a>

    </form>
@endsection

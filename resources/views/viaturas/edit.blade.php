@extends('layouts.stand')

@section('content')
    <h1 class="mb-4">🚗 Nova Viatura</h1>

    <form action="{{ route('viaturas.update', $viatura->id) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')



        <div class="mb-3">
            <label class="form-label">Marca</label>

            <div class="mb-3">
                <label class="form-label">Marca</label>

                <select name="marca" id="marca" class="form-control">
                    <option value="">Selecione uma marca</option>

                    <option value="Audi" {{ $viatura->marca == 'Audi' ? 'selected' : '' }}>Audi</option>
                    <option value="BMW" {{ $viatura->marca == 'BMW' ? 'selected' : '' }}>BMW</option>

                    <option value="Mercedes-Benz" {{ $viatura->marca == 'Mercedes-Benz' ? 'selected' : '' }}>
                        Mercedes-Benz
                    </option>

                    <option value="Volkswagen" {{ $viatura->marca == 'Volkswagen' ? 'selected' : '' }}>
                        Volkswagen
                    </option>

                    <option value="Renault" {{ $viatura->marca == 'Renault' ? 'selected' : '' }}>
                        Renault
                    </option>

                    <option value="Peugeot" {{ $viatura->marca == 'Peugeot' ? 'selected' : '' }}>
                        Peugeot
                    </option>

                    <option value="Tesla" {{ $viatura->marca == 'Tesla' ? 'selected' : '' }}>
                        Tesla
                    </option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Modelo</label>

                <select name="modelo" id="modelo" class="form-control">
                    <option value="">Primeiro escolha uma marca</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Matrícula</label>
                <input type="text" name="matricula" id="matricula" class="form-control" value="{{ $viatura->matricula }}"
                    maxlength="8" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Ano</label>
                <input type="number" name="ano" class="form-control" value="{{ $viatura->ano }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Quilómetros</label>
                <input type="number" name="quilometros" class="form-control" value="{{ $viatura->quilometros }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Preço (€)</label>
                <input type="number" step="0.01" name="preco" class="form-control" value="{{ $viatura->preco }}"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label">Fotografia</label>
                <input type="file" name="foto" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Estado</label>

                <select name="estado" class="form-control">
                    <option value="Disponível" {{ $viatura->estado == 'Disponível' ? 'selected' : '' }}>
                        Disponível
                    </option>

                    <option value="Vendido" {{ $viatura->estado == 'Vendido' ? 'selected' : '' }}>
                        Vendido
                    </option>

                    <option value="Reservado" {{ $viatura->estado == 'Reservado' ? 'selected' : '' }}>
                        Reservado
                    </option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">
                Guardar Viatura
            </button>

            <a href="{{ route('viaturas.index') }}" class="btn btn-secondary">
                Cancelar
            </a>

    </form>


    <script>
        const modelos = {

            "Audi": [
                "A1",
                "A3",
                "A4",
                "A6",
                "Q3",
                "Q5"
            ],

            "BMW": [
                "Série 1",
                "Série 3",
                "Série 5",
                "X1",
                "X3",
                "X5"
            ],

            "Mercedes-Benz": [
                "Classe A",
                "Classe C",
                "Classe E",
                "GLA",
                "GLC"
            ],

            "Volkswagen": [
                "Golf",
                "Polo",
                "Passat",
                "T-Roc",
                "Tiguan"
            ],

            "Renault": [
                "Clio",
                "Mégane",
                "Captur"
            ],

            "Peugeot": [
                "208",
                "308",
                "3008"
            ],

            "Tesla": [
                "Model 3",
                "Model Y",
                "Model S"
            ]

        };

        window.onload = function() {

            let marca = "{{ $viatura->marca }}";
            let modeloAtual = "{{ $viatura->modelo }}";

            document.getElementById('marca').value = marca;

            let modeloSelect = document.getElementById('modelo');

            modeloSelect.innerHTML =
                '<option value="">Selecione um modelo</option>';

            if (modelos[marca]) {

                modelos[marca].forEach(function(modelo) {

                    let option = document.createElement('option');

                    option.value = modelo;
                    option.text = modelo;

                    if (modelo === modeloAtual) {
                        option.selected = true;
                    }

                    modeloSelect.appendChild(option);

                });

            }

        };






        document.getElementById('matricula').addEventListener('input', function() {

            let valor = this.value
                .replace(/[^a-zA-Z0-9]/g, '')
                .toUpperCase();

            if (valor.length > 2) {
                valor = valor.substring(0, 2) + '-' + valor.substring(2);
            }

            if (valor.length > 5) {
                valor = valor.substring(0, 5) + '-' + valor.substring(5);
            }

            this.value = valor;
        });
    </script>
@endsection

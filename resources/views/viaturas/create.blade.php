@extends('layouts.stand')

@section('content')
    <h1 class="mb-4">🚗 Nova Viatura</h1>

    <form action="{{ route('viaturas.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label class="form-label">Marca</label>

            <div class="mb-3">
                <label class="form-label">Marca</label>

                <select name="marca" id="marca" class="form-control">
                    <option value="">Selecione uma marca</option>
                    <option value="Audi">Audi</option>
                    <option value="BMW">BMW</option>
                    <option value="Mercedes-Benz">Mercedes-Benz</option>
                    <option value="Volkswagen">Volkswagen</option>
                    <option value="Renault">Renault</option>
                    <option value="Peugeot">Peugeot</option>
                    <option value="Tesla">Tesla</option>
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
                <input type="text" name="matricula" id="matricula" class="form-control" maxlength="8" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Ano</label>
                <input type="number" name="ano" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Quilómetros</label>
                <input type="number" name="quilometros" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Preço (€)</label>
                <input type="number" step="0.01" name="preco" class="form-control" required>
            </div>

            <label class="form-label">Fotografia</label>
            <input type="file" name="foto" class="form-control">

            <div class="mb-3">
                <label class="form-label">Estado</label>
                <select name="estado" class="form-control">
                    <option value="Disponível">Disponível</option>
                    <option value="Vendido">Vendido</option>
                    <option value="Reservado">Reservado</option>
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

        document.getElementById('marca').addEventListener('change', function() {

            let marca = this.value;
            let modeloSelect = document.getElementById('modelo');

            modeloSelect.innerHTML =
                '<option value="">Selecione um modelo</option>';

            if (modelos[marca]) {

                modelos[marca].forEach(function(modelo) {

                    let option = document.createElement('option');

                    option.value = modelo;
                    option.text = modelo;

                    modeloSelect.appendChild(option);

                });

            }

        });
    </script>
@endsection

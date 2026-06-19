@extends('layouts.stand')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-6 col-lg-5">

            <div class="card shadow-lg border-0">
                <div class="card-header bg-dark text-white text-center">
                    <h4 class="mb-0">📝 Registar Conta</h4>
                </div>

                <div class="card-body p-4">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Nome</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Confirmar Password</label>
                            <input type="password" name="password_confirmation" class="form-control" required>
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-dark">
                                Registar
                            </button>

                            <a href="{{ route('login') }}" class="btn btn-secondary">
                                Voltar ao Login
                            </a>
                        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>
@endsection

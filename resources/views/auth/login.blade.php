@extends('layouts.stand')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-6 col-lg-5">

            <div class="card shadow-lg border-0">
                <div class="card-header bg-dark text-white text-center">
                    <h4 class="mb-0">🔐 Login</h4>
                </div>

                <div class="card-body p-4">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember">
                            <label class="form-check-label" for="remember">
                                Lembrar-me
                            </label>
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-dark">
                                Entrar
                            </button>

                            <a href="{{ route('register') }}" class="btn btn-secondary">
                                Registar
                            </a>
                        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>
@endsection

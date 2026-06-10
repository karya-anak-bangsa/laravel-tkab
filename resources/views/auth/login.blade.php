@extends('layouts.auth')
@section('content')
    <div class="card" id="auth-card">
        <div class="card-body">
            <form action="" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-12 mb-4">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group">
                            <input type="email" class="form-control" name="email" id="email" autocomplete="email">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-4">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" name="password" id="password">
                            <span class="input-group-text"><i class="fas fa-eye"></i></span>
                        </div>
                        <small class="text-danger">The password must be at least 8 characters long</small>
                    </div>
                    <div class="col-lg-12 mb-0">
                        <button type="submit" class="btn btn-login btn-secondary w-100">
                            <span><i class="fas fa-paper-plane me-2"></i>Login</span>
                        </button>
                    </div>
                </div>
            </form>
            {{-- form --}}
        </div>
        {{-- card-body --}}
    </div>
    {{-- card --}}

    <div class="mt-3">
        <a href="{{ route('register') }}" class="text-dark fw-bold">Create an account</a>
    </div>
@endsection

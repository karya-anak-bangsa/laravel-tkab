@extends('layouts.auth')

@section('nav-register', 'active')
@section('content')

    <div class="card" id="auth-card">
        <div class="card-body">
            <form action="{{ route('register.store') }}" method="post" enctype="multipart/form-data" class="confirm-submit">
                @csrf
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <label for="role" class="form-label">Role</label>
                        <div class="input-group">
                            <select class="form-select" name="role" id="role">
                                <option value="" disabled selected></option>
                                <option value="Senior Programmer">Senior Programmer</option>
                                <option value="Junior Programmer">Junior Programmer</option>
                            </select>
                            <span class="input-group-text"><i class="fas fa-user-gear"></i></span>
                        </div>
                        @error('role')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="full_name" class="form-label">Full Name</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="full_name" id="full_name">
                            <span class="input-group-text"><i class="fas fa-user-graduate"></i></span>
                        </div>
                        @error('full_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group">
                            <input type="email" class="form-control" name="email" id="email" autocomplete="email">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" name="password" id="password">
                            <span class="input-group-text"><i class="fas fa-eye"></i></span>
                        </div>
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        {{-- <small class="text-danger">The password must be at least 8 characters long</small> --}}
                    </div>
                    <div class="col-lg-12 mb-0">
                        <button type="submit" class="btn btn-login btn-secondary w-100">
                            <span><i class="fas fa-paper-plane me-2"></i>Registration</span>
                        </button>
                    </div>
                </div>
            </form>
            {{-- form --}}
        </div>
        {{-- card-body --}}
    </div>
    {{-- card --}}

@endsection
@include('components.sweetalert.scripts-create')

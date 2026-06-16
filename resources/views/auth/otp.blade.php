@extends('layouts.auth')

@section('nav-register', 'active')
@section('content')

    <div class="card" id="auth-card">
        <div class="card-body">
            <form action="{{-- route('register.store') --}}" method="post" enctype="multipart/form-data" class="confirm-submit">
                @csrf
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <label for="otp_code" class="form-label">OTP Code</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="otp_code" id="otp_code">
                            <span class="input-group-text"><i class="fas fa-envelope-circle-check"></i></span>
                        </div>
                        @error('otp_code')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-lg-12 mb-0">
                        <button type="submit" class="btn btn-login btn-secondary w-100">
                            <span><i class="fas fa-paper-plane me-2"></i>Verification</span>
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

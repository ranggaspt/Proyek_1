@extends('layouts.app')

@section('content')

<div class="login-page">
<div class="form">
        <form method="POST" class="login-email" action="{{ route('login') }}">
        @csrf
            <img src="{{ asset('latar/logo.png') }}" class="mx-auto d-block login text " width="100%">

            <div class="input-group">
            <input id="email" type="email" placeholder="Username" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="input-group">
                
            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="input-group">
                <button type="submit" class="btn">
                    {{ __('Login') }}
                </button>
            </div>

            
        </form>
    </div>
</div>


@endsection

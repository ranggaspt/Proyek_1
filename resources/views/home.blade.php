@extends('sidebar.sidebar')
@extends('layouts.app')


@section('dashboard')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard Admin') }}</div>

                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                            @endif

                            <h3><center>{{ __('Selamat Datang ') }}{{ Auth::user()->name}}{{ __('!') }}</center></h3>
                            <img src="{{ asset('latar/komunitas.png') }}" class="mx-auto d-block login text " width="100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

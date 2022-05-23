@extends('sidebar.sidebar')
@extends('layouts.app')


@section('dashboard')

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link href="{{ asset('css/kelola.css') }}" rel="stylesheet">

    <title>Kelola data tentang</title>
</head>

<body>
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3 ">
                <div class=" col-sm-6 m-0 h2">DASHBOARD</div>
            </div>
            @if ($message = Session::get('succes'))
            <div class="alert alert-success" role="alert">
                {{$message}}
            </div>
            @endif
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <h3>
                    <center>{{ __('Selamat Datang ') }}{{ Auth::user()->name}}{{ __('!') }}</center>
                </h3>
                <img src="{{ asset('latar/komunitas.png') }}" class="mx-auto d-block login text " width="80%">
            </div>
        </div>
</body>

</html>
@endsection

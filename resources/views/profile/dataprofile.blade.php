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
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->

    <link href="{{ asset('css/kelola.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">

    <title>Kelola data Profile</title>
</head>

<body>
    <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header py-3 ">
                        <div class=" col-sm-6 m-0 h2">PROFILE</div>
                </div>
                @if ($message = Session::get('succes'))
                <div class="alert alert-success" role="alert">
                    {{$message}}
                </div>
                @endif
                <div class="row m-l-0 m-r-0">
                    <div class="col-sm-4 bg-c-lite-green user-profile">
                        <div class="card-block text-center text-white">
                                <div class="user-logo">
                                <img src="{{ asset('latar/logo1.jpg') }}" class="img-radius p-2" alt="User-Profile-Image">
                                </div><br>
                            <h6 class="f-w-600">{{ Auth::user()->name}}</h6>
                            <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="card-block">
                            <h5 class="m-b-20 p-b-5 b-b-default f-w-600">INFORMASI</h5>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="m-b-10 f-w-600">Name</p>
                                    {{ Auth::user()->name}}
                                </div>
                                <div class="col-sm-6">
                                    <p class="m-b-10 f-w-600">Email</p>
                                    {{ Auth::user()->email}}
                                </div>
                            </div>
                            <br><br><a href="/tampilkanprofile/{{ Auth::user()->id}}" class="tbtn btn btn-info">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>

@endsection

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

    <title>Kelola data teledokter</title>
</head>

<body>
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3 ">
                <div class="row">
                    <div class=" col-sm-6 m-0 h2">TELEDOKTER</div>
                    <div class="col-sm-6">
                    <a href="/tambahteledokter" class="r btn btn-primary tambah"><span>Tambah</span></a>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('succes'))
            <div class="alert alert-success" role="alert">
                {{$message}}
            </div>
            @endif
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                        <div>
                            <h5 class="font-weight-bold">Tabel Teledokter</h5>
                        </div>
                        <thead>
                            <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Foto</th>
                            <th>Link</th>
                            <th>Waktu</th>
                            <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>
                        @php
                        $no = 1;
                        @endphp
                        @foreach($data as $row)
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $row->nama }}</td>
                            <td>
                                <img src="{{ asset('fototeledokter/'.$row->foto )}}" alt="" style="width: 50px;">
                            </td>
                            <td>{{ $row->link }}</td>
                            <td>{{ $row->created_at->format('d-m-Y') }}</td>
                            <td>
                                <a href="/tampilkanteledokter/{{ $row->id }}" class="tbtn btn btn-info">Edit</a>
                                <a href="/deleteteledokter/{{ $row->id }}" type="button" class="tbtn btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
@endsection
@extends('sidebar.sidebar')
@extends('layouts.app')


@section('dashboard')

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/kelola.css') }}" rel="stylesheet">

    <title>Kelola data postingan</title>
</head>

<body>
<div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3 ">
                <div class="row">
                    <div class=" col-sm-6 m-0 h2">POSTINGAN</div>
                    <div class="col-sm-6">
                    <a href="/tambahpostingan" class="r btn btn-primary tambah"><span>Tambah</span></a>
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
                            <h5 class="font-weight-bold">Tabel Postingan</h5>
                        </div>
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Foto</th>
                            <th>Deskripsi</th>
                            <th>Waktu</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1;
                        @endphp
                        @foreach($data as $row)
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $row->judul }}</td>
                            <td>
                                <img src="{{ asset('fotopost/'.$row->foto )}}" alt="" style="width: 100px;">
                            </td>
                            <td>{{ $row->deskripsi }}</td>
                            <td>{{ $row->created_at->format('d-m-Y') }}</td>
                            <td>
                                <a href="/tampilkanpostingan/{{ $row->id }}" class="tbtn btn btn-info">Edit</a>
                                <a href="#" type="button" data-id="{{ $row->id }}" data-nama="{{ $row->judul }}"
                                        class="tbtn btn btn-danger delete">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    $('.delete').click(function(){
        var postid = $(this).attr('data-id');
        var judul = $(this).attr('data-nama');
        swal({
            title: "Yakin?",
            text: "Anda akan menghapus postingan '"+judul+"' ",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location = "/deletepostingan/"+postid+""
                swal("Data berhasil di hapus!", {
                    icon: "success",
                });
            } else {
                swal("Data tidak jadi di hapus");
            }
        });
    });
</script>

</html>
@endsection
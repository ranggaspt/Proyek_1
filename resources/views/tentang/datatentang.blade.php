<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="{{ asset('css/kelola.css') }}" rel="stylesheet">

    <title>Kelola data tentang</title>
</head>

<body>
    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>TENTANG</h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="/tambahtentang" class="btn btn-primary"><span>Tambah</span></a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('succes'))
                <div class="alert alert-success" role="alert">
                    {{$message}}
                </div>
                @endif
                <table class="table table-striped table-hover"><br>
                    <div>
                        <h5>Tabel Tentang</h5>
                    </div>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
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
                            <td>{{ $row->judul }}</td>
                            <td>{{ $row->deskripsi }}</td>
                            <td>
                                <a href="/tampilkantentang/{{ $row->id }}" class="tbtn btn btn-info">Edit</a>
                                <a href="/deletetentang/{{ $row->id }}" type="button" class="tbtn btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>

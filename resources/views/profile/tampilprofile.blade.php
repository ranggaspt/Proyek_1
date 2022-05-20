
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Kelola data profile</title>
    <link href="{{ asset('css/kelola.css') }}" rel="stylesheet">
</head>

<body>
    <br>
    <div class="container ">
        <div class="table-responsive card card-primary">
            <div class="card-header">
                <h3 class="card-title">EDIT PROFIL</h3>
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <div class="card">
                                <div class="card-body">
                                    <form action="/updateprofile/{{$data->id}}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                            <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" value="{{$data->name}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email</label>
                                            <input type="email" name="rmail" class="form-control"
                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                value="{{$data->email}}">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

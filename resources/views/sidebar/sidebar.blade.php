<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.js') }}" defer></script>
    <script src="{{ asset('js2/jquery.min.js') }}" defer></script>
    <script src="{{ asset('js2/popper.js') }}" defer></script>
    <script src="{{ asset('js2/bootstrap.min.jss') }}" defer></script>
    <script src="{{ asset('js2/main.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    
        <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
                <div class="custom-menu">
        </div>
            <div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
                <div class="user-logo">
                  
                    <div class="img" style="background-image: url(images/logo.jpg);"></div>
                    
                    <h3>{{ Auth::user()->name }}</h3>
                </div>
            </div>
        <ul class="list-unstyled components mb-5">
          
          <li class="active">
            <a href="#"><span class="bi bi-grid-1x2-fill mr-3"></span> Dashboard</a>
          </li>
          <li>
              <a href="#"><span class="bi bi-person-circle mr-3"></span> Profile</a>
          </li>
          <li>
            <a href="#"><span class="bi bi-collection-fill mr-3"></span> Postingan</a>
          </li>
          <li>
            <a href="#"><span class="bi bi-book-fill mr-3"></span> Edukasi</a>
          </li>
          <li>
            <a href="#"><span class="bi bi-chat-left-text-fill mr-3"></span> Diskusi</a>
          </li>
          <li>
            <a href="#"><span class="bi bi-shield-shaded mr-3"></span> Teledokter</a>
          </li>
          <li>
            <a href="{{ route('pengguna') }}"><span class="bi bi-people-fill mr-3"></span> Pengguna</a>
          </li>
          <li>
            <a href="{{ route('tentang') }}"><span class="bi bi-info-circle-fill mr-3"></span> Tentang</a>
          </li>
        </ul>

        </nav>
        <main class="py-4">
            @yield('dashboard')
        </main>
        </div>

    </div>

</body>
</html>



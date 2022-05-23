<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts 
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.js') }}" defer></script>
    <script src="{{ asset('js2/popper.js') }}" defer></script>
    <script src="{{ asset('js2/bootstrap.min.js') }}" defer></script>
    -->
    <script src="{{ asset('js2/jquery.min.js') }}" defer></script>
    <script src="{{ asset('js2/main.js') }}" defer></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!--<link rel="stylesheet" href="./assets/app/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/index.css">-->


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
        <div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary"></button>
        </div>
        <div class="img bg-wrap text-center py-4">
	  			<div class="user-logo">
                  <img src="{{ asset('latar/logo1.jpg') }}" class="img-radius p-2" alt="User-Profile-Image" width="34%">
                  <h4 class="forh">{{ Auth::user()->name }}</h4>
	  			</div>
	  		</div>

            <!--<div class="img bg-wrap text-center py-4">
                <div>
                    <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image">
                    <div class="img" style="background-image: url(images/logo.jpg);"></div>
                    <h4 class="forh">{{ Auth::user()->name }}</h4>
                </div>
            </div>-->
            
            <ul class="list-unstyled components mb-5">

                <li class="{{ request()->is('home') ? 'active' : ''}}">
                    <a href="{{ route('home') }}"><span class="bi bi-grid-1x2-fill mr-3"></span> Dashboard</a>
                </li>
                <li class="{{ request()->is('home/profile') ? 'active' : ''}}">
                    <a href="{{ route('profile') }}"><span class="bi bi-person-circle mr-3"></span> Profile</a>
                </li>
                <li class="{{ request()->is('home/postingan') ? 'active' : ''}}">
                    <a href="{{ route('postingan') }}"><span class="bi bi-collection-fill mr-3"></span> Postingan</a>
                </li>
                <li class="{{ request()->is('home/edukasi') ? 'active' : ''}}">
                    <a href="{{ route('edukasi') }}"><span class="bi bi-book-fill mr-3"></span> Edukasi</a>
                </li>
                <li class="{{ request()->is('home/diskusi') ? 'active' : ''}}">
                    <a href="{{ route('diskusi') }}"><span class="bi bi-chat-left-text-fill mr-3"></span> Diskusi</a>
                </li>
                <li class="{{ request()->is('home/teledokter') ? 'active' : ''}}">
                    <a href="{{ route('teledokter') }}"><span class="bi bi-shield-shaded mr-3"></span> Teledokter</a>
                </li>
                <li class="{{ request()->is('home/pengguna') ? 'active' : ''}}">
                    <a href="{{ route('pengguna') }}"><span class="bi bi-people-fill mr-3"></span> Pengguna</a>
                </li>
                <li class="{{ request()->is('home/tentang') ? 'active' : ''}}">
                    <a href="{{ route('tentang') }}"><span class="bi bi-info-circle-fill mr-3"></span> Tentang</a>
                </li>
            </ul>

        </nav>
        <main class="py-4  pt-5 ">
            @yield('dashboard')
        </main>
    </div>
    </div>

</body>

</html>

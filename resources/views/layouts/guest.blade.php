<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    </head>
    <body>




<div class="font-sans text-gray-900 antialiased">



     @if (Route::has('login'))
    <header class="fixed-top p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Latest Converter</a></li>
          <li><a href="#" class="nav-link px-2 text-white">About</a></li>
          <li><a href="#" class="nav-link px-2 text-white">API Doc</a></li>
        </ul>
@auth
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="{{ url('/dashboard') }}" class="nav-link px-2 text-secondary">Dashboard</a></li>
        </ul>
@else
        <div class="text-end">
          <button type="button" href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</button>
    @if (Route::has('register'))
          <button type="button" href="{{ route('register') }}" class="btn btn-warning">Register</button>
          @endif
                    @endauth
        </div>
      </div>
    </div>
  </header>
     @endif
            {{ $slot }}

<div class="container">
  <footer class="py-3 my-4">
    <p class="text-center text-muted">&copy; 2022 BetConverter, Inc</p>
  </footer>
</div>
        </div>
    </body>
</html>

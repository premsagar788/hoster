<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <title>@yield('title')</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

  <meta name="theme-color" content="#7952b3">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>

  @yield('head')

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
        <span class="fa fa-server fa-2x fa-border"></span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto">
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ms-auto">
          <!-- Authentication Links -->
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/about') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/domains') }}">Domains</a>
          </li>
          <li class="nav-item">         
            <a class="nav-link" href="{{ url('/pricing') }}">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/faq') }}">FAQ</a>
          </li>
          @auth
          <a class="py-2 btn" href="@if (auth()->user()->role == 'user') {{ url('user/dashboard') }} @elseif (auth()->user()->role == 'admin') {{ url('admin/dashboard') }} @else @endif">
            <span class="fa fa-user"></span>
          </a>
          @endauth
          @guest
          <a class="py-2 btn btn-primary" href="{{ url('login') }}">Login</a>
          @endguest
          <li>
            <a class="me-2 text-dark text-decoration-none" href="{{ url('/cart') }}"><i class="fa fa-shopping-cart"></i> 
              <span class="cart-count">{{ count((array) session('cart')) }}</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <main>
    @yield('content')
    <!-- FOOTER -->
    <footer class="d-flex flex-wrap align-items-center border-top pt-5 pb-5">
      <div class="container">
        <div class="row ">
          <div class="col-lg-4 col-md-6 col-sm-12">
            <span class="fa fa-server fa-2x fa-border"></span>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old</p>
            <p class="mb-0 text-muted">© 2023 {{ config('app.name') }}</p>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <h2>Links</h2>
              <a href="{{ url('/') }}" class="nav-link px-2 text-muted">Home</a>
              <a href="{{ url('/about') }}" class="nav-link px-2 text-muted">About</a>
              <a href="{{ url('/pricing') }}" class="nav-link px-2 text-muted">Pricing</a>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <h2>Contact</h2>
            <p class="m-0"><a href="tel:+12012769057"></a> <span class="fa fa-phone"></span> Phone: +1 201-276-9057</p>
            <p class="m-0"><a href="mailto:info@domain.com"></a> <span class="fa fa-envelope"></span> Email: info@domain.com</p>
            <p class="m-0"><a href="mailto:info@domain.com"></a> <span class="fa fa-map-marker"></span> Address: 2846 West Side Avenue, West Orange, New Jersey 07052</p>
          </div>
          
        </div>
      </div>
    </footer>

  </main>

  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
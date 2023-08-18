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
  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="http://127.0.0.1:8000">
        Hosting
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
            <a class="nav-link" href="{{ url('about') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('domains') }}">Domains</a>
          </li>
          <li class="nav-item">         
            <a class="nav-link" href="{{ url('pricing') }}">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('faq') }}">FAQ</a>
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
    <section class="footer-section">
      <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>© 2017–2021 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
      </footer>
    </section>

  </main>

  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
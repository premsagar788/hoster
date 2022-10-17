<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>@yield('title')</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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

    
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <header>
        <div class="d-flex flex-column flex-md-row align-items-center border-bottom">
          <a href="{{ url('/') }}" class="d-flex align-items-center pt-3 pb-3 text-dark text-decoration-none">
            <span class="fs-4">Hosting</span>
          </a>

          <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{ url('about') }}">About</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{ url('domains') }}">Domains</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{ url('pricing') }}">Pricing</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{ url('faq') }}">FAQ</a>
            <a class="py-2 btn btn-primary" href="#">Login</a>
          </nav>
        </div>
      </header>
    </div>
    
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

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
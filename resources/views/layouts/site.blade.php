<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Carousel Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <meta name="theme-color" content="#7952b3">

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
          <a href="/" class="d-flex align-items-center pt-2 pb-2 text-dark text-decoration-none">
            <span class="fs-4">Hosting</span>
          </a>

          <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <a class="me-3 py-2 text-dark text-decoration-none" href="#">Features</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="#">Enterprise</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="#">Support</a>
            <a class="py-2 text-dark text-decoration-none" href="#">Pricing</a>
          </nav>
        </div>
      </header>
    </div>
    
    @yield('content')

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
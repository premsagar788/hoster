@extends('layouts.site')

@section('title', 'Who is info for '.$domain )

@section('content')

  <div class="jumbotron">
    <div class="container">
      <h1>Who is information</h1>
      <p>View whois information of your requested domain <u>{{ $domain }}</u> below!</p>
    </div>
  </div>
  <div class="container cart">
    <div class="row">
      <table class="table-bordered">
        @if(isset($whois))
          @foreach($whois as $data)
            @php $type = $data['type'] @endphp
            @if ($type == 'A')
              <tr>
                <th>A</th>
                <td>IP</td>
              </tr>
              <tr>
                <td>{{ $data['ip'] }}</td>
                
              </tr>
            @endif
            @if ($type == 'SOA')
              <th>SOA</th>
              <tr>
                <td>MNAMe</td>
                <td>RNAME</td>
              </tr>
              <tr>
                
                <td>{{ $data['mname'] }}</td>
                <td>{{ $data['rname'] }}</td>
              </tr>
            @endif
            @if ($type == 'MX' || $type == 'NS')
              <li class="list-group-item">{{ $data['type'] }}: {{ $data['target'] }}</li>
            @endif

           
          @endforeach
        @endif
        </table>

      <div class="card" style="width: 18rem;">
        <div class="card-header">
          Featured
        </div>
        <ul class="list-group list-group-flush">
          
          
        </ul>
      </div>

      
    </div>
  </div>
  <br>
  <section class="partners">
    <div class="container">
      <h2 class="text-center text-white">Our Partners</h2>
      <br>
      <div class="row">
        <div class="col col-lg-2 col-md-6 col-sm-12">
          <img src="{{ asset('/images/logo1.png') }}">
        </div>

        <div class="col col-lg-2 col-md-6 col-sm-12">
          <img src="{{ asset('/images/logo2.png') }}">
        </div>

        <div class="col col-lg-2 col-md-6 col-sm-12">
          <img src="{{ asset('/images/logo3.png') }}">
        </div>

        <div class="col col-lg-2 col-md-6 col-sm-12">
          <img src="{{ asset('/images/logo4.png') }}">
        </div>

        <div class="col col-lg-2 col-md-6 col-sm-12">
          <img src="{{ asset('/images/logo5.png') }}">
        </div>

        <div class="col col-lg-2 col-md-6 col-sm-12">
          <img src="{{ asset('/images/logo6.png') }}">
        </div>
      </div>
    </div>
  </section>

@endsection
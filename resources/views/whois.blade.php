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
    <div class="col col-lg-8 col-sm-12 col-md-6">
      <div class="table-responsive">
        <table class="table table-striped table-hover" style="width:100%" border="1">
          <thead>
            <tr>
              <th scope="col">Record type</th>
              <th scope="col">Value</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              @if(!empty($aRec))
              <th>A</th>
              <td>
                @foreach ($aRec as $aRec)
                <span>{{ $aRec['ip']  . ' ' }}</span><br>
                @endforeach
              </td>
              @endif
            </tr>

            <tr>
              @if(!empty($NS))
              <th>NS</th>
              <td>
                @foreach ($NS as $NS)
                <span>{{ $NS['target'] . ' ' }}</span><br>
                @endforeach
              </td>
              @endif
            </tr>

            <tr>
              @if(!empty($MX))
              <th>NS</th>
              <td>
                @foreach ($MX as $MX)
                <span>{{ $MX['target'] . ' ' }}</span><br>
                @endforeach
              </td>
              @endif
            </tr>

            <tr>
              @if(!empty($SOA))
              <th>SOA</th>
              <td>
                @foreach ($SOA as $SOA)
                <span>{{ 'mname: ' . $SOA['mname'] }}</span><br>
                <span>{{ 'rname: ' . $SOA['rname'] }}</span>
                @endforeach
              </td>
              @endif
            </tr>

            <tr>
              @if(!empty($TXT))
              <th>TXT</th>
              <td>
                @foreach ($TXT as $TXT)
                <span>{{ $TXT['txt'] }}</span><br>
                @endforeach
              </td>
              @endif
            </tr>

            <tr>
              @if(!empty($AAAA))
              <th>AAAA</th>
              <td>
                @foreach ($AAAA as $AAAA)
                <span>{{ $AAAA['ipv6'] }}</span><br>
                @endforeach
              </td>
              @endif
            </tr>



            
          </tbody>

    <!-- 
    aRec
    cname
    hInfo
    NAPtr
    MX
    NS
    PTR
    SOA
    TXT
    AAAA
    SRV
    domain -->
  </table>
</div>
</div>
<div class="col col-lg-4 col-sm-12 col-md-12"></div>


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
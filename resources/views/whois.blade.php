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
    <div class="col col-lg-12 col-sm-12 col-md-12 pt-5 pb-5">
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
        </table>
      </div>
    </div>
    <div class="col col-lg-4 col-sm-12 col-md-12"></div>
  </div>
</div>

@endsection
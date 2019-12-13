<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cotação de Cryptomoedas">
    <meta name="keywords" content="Cryptomoedas,Bitcoin,Litecoin,BCash,XRP,Ripple,Ethereum">
    <meta name="author" content="Fernando Britto">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/main.css">

    <title>@yield('title') </title>
</head>
<body>
    <div class="row">
        <div class="col1">
            <div class="menu">
                <ul>
                    <li><a class="{{request()->routeIs('contents.*') ? 'active' : ''}}" href="{{ route('Bitcoin') }}">BTC : Bitcoin</a></li>
                    <li><a href="{{ route('Litecoin') }}">LTC : Litecoin</a></li>
                    <li><a href="{{ route('BCash') }}">BCH : BCash</a></li>
                    <li><a href="{{ route('Ripple') }}">XRP : XRP (Ripple)</a></li>
                    <li><a href="{{ route('Ethereum') }}">ETH : Ethereum</a></li>

                </ul>
            </div>
        </div>
    <div class="col2">
        @yield('content', 'Default Content');
    </div>
</div>
</body>
</html>

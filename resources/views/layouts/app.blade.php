<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="with=device-width, initial-scale=1">

    <!-- CSRF TOKEN -->
    <meta name="csrf-token" content="{{ cstf_token() }}">

    <title>@yield('title', 'LaraBBS') - Laravel Study</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset(' css/app.css ') }}">
</head>
<body>
    <div id="app" class="{{ route_class() }}-page">
        @include('layouts._header')
        <div class="container">
            @yield('content')
        </div>
        @include('layouts._footer')
    </div>

    <!-- Scripts -->

    <script src=" {{ asset('js/app.js')}} "></script>
</body>
</html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>mada-annonce</title>
    @viteReactRefresh
    @vite(['resources/css/app.css',
    'resources/js/app.jsx'])
</head>

<body>
    @include('front.layouts._header')
    <div class="container mx-auto">
        @yield('content')
    </div>
</body>

</html>
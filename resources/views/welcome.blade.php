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
    @include('layouts._header')
    <div class="flex flex-wrap justify-center gap-4 p-4">
    <a href="#" class="btn-indigo">
      Button 1
    </a>
    <a href="#" class=" btn-error">
      Button 2
    </a>
    <a href="#" class="btn-success">
      Button 3
    </a>
    <a href="#" class="btn-info">
      Button 4
    </a>
    <a href="#" class="btn-warning">
      Button 4
      <i class="las la-user-circle text-slate-900 text-3xl²&"></i>
    </a>
    <i class="fa-solid fa-cart-arrow-down text-cyan-400"></i>
    <i class="fa-light fa-user"></i>

  </div>
</body>
</html>
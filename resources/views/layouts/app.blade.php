<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav>
        <ul class="navbar-nav">
            <li class="px-3 py-2 mt-2"> <a href="{{route('Comic.index')}}"> Home</a></li>
            <li class="px-3 py-2"> <a href="{{route('Comic.create')}}">Crea nuovo Comic</a></li>
        </ul>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
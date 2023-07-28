<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{asset('css\main.css') }}">
    <title>Document</title>
</head>
<body>
    @include('layouts.header')
    <div class="section">
        <div class="container">
            @yield('content')
        </div>
    </div>
    @include('layouts.footer')
</body>
</html>
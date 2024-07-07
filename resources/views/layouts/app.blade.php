<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>byHYONS</title>
    @vite('resources/js/app.js')
</head>
<body>
    @include('shared.header')
    
    <h1>Hello World!</h1>

    @yield('content')
    
    {{-- <img src="{{ Vite::asset('resources/img/logo.png') }}" alt=""> --}}
    
    @include('shared.footer')
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'MyMovies')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
    {{-- HEADER --}}
    @include('includes.header')
    {{-- MAIN --}}
    <main>
        @yield('content')
    </main>
</body>
</html>
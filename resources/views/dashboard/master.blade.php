<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>

    {{-- Es lo mismo --}}

    {{-- @if (session('status'))
        {{ session('status') }}
    @endif --}}

    @session('key')
        <h1>{{ $value }}</h1>
    @endsession

    {{-- ---- --}}
    
    @yield('contenido')

    <section>@yield('mas_contenido')</section>
</body>
</html>
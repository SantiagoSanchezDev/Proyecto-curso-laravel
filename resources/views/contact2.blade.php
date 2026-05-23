<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CONTACT2</h1>

    <p>{{ $name }}</p>

    @if ($name == 'Juan')
        <p>Tu nombre es Juan</p>
    @else
        <p>Tu nombre no es Juan</p>
    @endif

    @foreach ([1,2,3,4] as $item)
        {{ $item }}
    @endforeach
</body>
</html>
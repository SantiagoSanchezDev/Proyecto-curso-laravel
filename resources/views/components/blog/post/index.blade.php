
<div>
    <!-- Be present above all else. - Naval Ravikant -->

    {{-- slot por defecto, el más simple, si no tiene contenido no imprime nada --}}
    <h1>{{ $slot }}</h1>
    
    @if (isset($header))
        <h1>{{ $header }}</h1>
    @endif

    @foreach ($posts as $item)
        <div class="card card-white mt-2">
            <h3>{{ $item->title }}</h3>
            <a href="{{ route('blog.show', $item)}}">Ir</a>

            <p>{{ $item->description }}</p>
        </div>
    @endforeach

    <br>

    @if (isset($extra))
        <h1>{{ $extra }}</h1>
    @endif

    <h1>{{ $footer }}</h1>

    {{ $posts->links() }}
</div>
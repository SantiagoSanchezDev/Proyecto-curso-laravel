<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
    <div class="card">
        {{-- Aplicación de método (definido en la clase componente) --}}
        {{-- {{ $changeTitle() }} --}}

        {{ $title1 }}

        <h1>{{ $post->title }} </h1>
        <span>{{ $post->description }}</span>

        <hr>
        {{ $post->content }}
    </div>
</div>
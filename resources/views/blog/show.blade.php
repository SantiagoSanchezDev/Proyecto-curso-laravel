@extends('blog.master')

@section('contenido')



    {{-- los : indica que es un parámetro del componente --}}

    {{--Aquí se define la ruta del componente en sí mismo 
        en la carpeta views de resorices (no se crea constructor de Show) --}}

    {{-- <x-blog.post.show :post='$post' title="Titulo definido en el componente" /> --}}

    {{-- Aquí se define la ruta de la clase del componente en app/... (junto a los controladores) --}}
    <x-blog.show :post='$post' title1="Titulo definido en el componente" />

    {{-- <div class="card">
        <h1>{{ $post->title }} </h1>
        <span>{{ $post->description }}</span>

        <hr>
        {{ $post->content }}
    </div> --}}

    {{-- <x-blog.card/>
    <x-blog.card class="bg-white"/>
    <x-blog.card class="bg-yellow-50 asasa"/> --}}

    <x-blog.card/>
    <x-blog.card/>
    <x-blog.card/>

@endsection
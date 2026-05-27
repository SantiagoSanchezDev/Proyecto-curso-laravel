@extends('blog.master')

@section('contenido')

    <x-blog.post.index :posts='$posts'>

        Contenido

        @slot('footer')
            Footer
        @endslot

        @slot('extra', 'Extra')

        @slot('header')
            Header
        @endslot

    </x-blog.post.index>

@endsection

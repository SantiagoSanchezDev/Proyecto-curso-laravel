@extends('dashboard.master')

@section('contenido')

    @include('/dashboard/fragment/_errors-form')

    <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">

        {{-- htl no soporta peticiones detipo put/patch, se agrega --}}
        @method('PATCH')

        {{-- Se le pueden pasar más datos --}}
        @include('dashboard.fragment._form', ['task' => 'edit']) 
        
        {{-- @csrf
        
        <label for="">Title</label>
        <input type="text" name="title" value="{{ $post->title }}">

        <label for="">Slug</label>
        <input type="text" name="slug" value="{{ $post->slug }}">

        <label for="">Content</label>
        <textarea name="content">{{ $post->content }}</textarea>

        <label for="">Category</label>
        <select name="category_id">
            @foreach ($categories as $title => $id)
                <option {{ $post->category_id == $id ? 'selected' : '' }} value="{{ $id }}">{{ $title }}</option>
            @endforeach
        </select>

        <label for="">Descripcion</label>
        <textarea name="description">{{ $post->description }}</textarea>

        <label for="">Posted</label>
        <select name="posted">
            <option {{ $post->posted == 'not' ? 'selected' : '' }}  value="not">Not</option>
            <option {{ $post->posted == 'yes' ? 'selected' : '' }} value="yes">Yes</option>
        </select> --}}

        <button type="submit">Editar</button>
    </form>
@endsection
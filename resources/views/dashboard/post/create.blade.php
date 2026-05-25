@extends('dashboard.master')

@section('contenido')

    @include('/dashboard/fragment/_errors-form')

    <form action="{{ route('post.store') }}" method="post">

        @include('dashboard.fragment._form')

        {{-- @csrf --}}
        
        {{-- <label for="">Title</label>
        <input type="text" name="title">

        <label for="">Slug</label>
        <input type="text" name="slug">

        <label for="">Content</label>
        <textarea name="content"></textarea>

        <label for="">Category</label>
        <select name="category_id">
            @foreach ($categories as $title => $id)
                <option value="{{ $id }}">{{ $title }}</option>
                
            @endforeach
        </select>

        <label for="">Descripcion</label>
        <textarea name="description"></textarea>

        <label for="">Posted</label>
        <select name="posted">
            <option value="not">Not</option>
            <option value="yes">Yes</option>
        </select> --}}

        <button type="submit">Send</button>
    </form>
@endsection
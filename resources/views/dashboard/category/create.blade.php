@extends('dashboard.master')

@section('contenido')

    @include('/dashboard/fragment/_errors-form')

    <form action="{{ route('category.store') }}" method="post">

        @include('dashboard.category._form')

        <button type="submit">Send</button>
    </form>
@endsection
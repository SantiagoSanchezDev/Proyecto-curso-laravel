@extends('dashboard.master')

@section('contenido')

    <a href="{{ route('post.create')}}" target="blank">Create</a>
    <table class="table">
        <thead>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Title
                </th>
                <th>
                    Posted
                </th>
                <th>
                    Category
                </th>
                <th>
                    Options
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($post as $p)
                <tr>
                    <td>
                        {{ $p->id }}
                    </td>
                    <td>
                        {{ $p->title }}
                    </td>
                    <td>
                        {{ $p->posted }}
                    </td>
                    <td>
                        {{ $p->category->title }}
                    </td>
                    <td>
                        {{-- laravel ya sabe que el objeto tiene un identificador (id) --}}
                        
                        <a href="{{ route('post.edit', $p) }}">Edit</a>
                        <a href="{{ route('post.show', $p) }}">Show</a>
                    
                        <form action="{{ route('post.destroy', $p) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            
        </tbody>
    </table>

    {{ $post->links() }}
   
@endsection
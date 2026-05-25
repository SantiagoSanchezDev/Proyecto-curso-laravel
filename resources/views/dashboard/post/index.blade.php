@extends('dashboard.master')

@section('contenido')

    <a href="{{ route('post.create')}}" target="blank">Create</a>
    <table>
        <thead>
            <tr>
                <td>
                    ID
                </td>
                <td>
                    Title
                </td>
                <td>
                    Posted
                </td>
                <td>
                    Category
                </td>
                <td>
                    Options
                </td>
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
                    </td>
                    <td>
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
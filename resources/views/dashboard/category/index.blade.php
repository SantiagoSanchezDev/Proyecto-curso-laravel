@extends('dashboard.master')

@section('contenido')

    <a href="{{ route('category.create')}}" target="blank">Create</a>
    <table>
        <thead>
            <tr>
                <td>
                    ID
                </td>
                <td>
                    Title
                </td>
        </thead>
        <tbody>
            @foreach ($category as $c)
                <tr>
                    <td>
                        {{ $c->id }}
                    </td>
                    <td>
                        {{ $c->title }}
                    </td>
                    <td>                        
                        <a href="{{ route('category.edit', $c) }}">Edit</a>
                        <a href="{{ route('category.show', $c) }}">Show</a>
                    </td>
                    <td>
                        <form action="{{ route('category.destroy', $c) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            
        </tbody>
    </table>

    {{ $category->links() }}
   
@endsection
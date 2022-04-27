@extends('layouts.app')

@section('content')
    <table>
        <thead>
            <th>Title</th>
            <th>Prices</th>
            <th>Series</th>
            <th>Images</th>
        </thead>
        <tbody>
        @foreach ($comics as $el)
        <tr>
            <td>{{$el->title}}</td>
            <td>{{$el->price}}</td>
            <td>{{$el->series}}</td>
            <td> <img src="{{$el->thumb}}"> </td>
            <td> <button> <a href="{{route('Comic.show', $el->id)}}">Visualizza</a></button> </td>
            <td> <button> <a href="{{route('Comic.edit', $el->id)}}">Modifica</a></button></td>
            <td>
                <form action="{{route('Comic.destroy', $el->id)}}" method="post">
                    @csrf
                    @method ('delete')
                    <button type="submit" onclick="return confirm('Sicuro di voler cancellare?')">Cancella</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
   
@endsection
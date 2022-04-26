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
        </tr>
        @endforeach
        </tbody>
    </table>
   
@endsection
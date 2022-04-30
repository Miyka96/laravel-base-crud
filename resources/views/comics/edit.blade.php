@extends('layouts.app')
@section('content')

<div class="container">
    <h1>Modifica Comic:</h1>
</div>
<div class="container">

    <form action="{{route('Comic.update',$comic->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Titolo</label>
            <input class="form-control" type="text" name="title" id="title" placeholder="Inserisci il titolo" value="{{$comic->title}}">
        </div>

        <div class="form-group">
            <label for="description"> Descrizione </label>
            <textarea class="form-control" id="description" name="description" maxlength="200" placeholder="Inserisci la descrizione">{{$comic->description}}</textarea>
        </div>

        <div class="form-group">
            <label for="thumb">Immagine</label>
            <input class="form-control" type="text" name="thumb" id="thumb" placeholder="Inserisci url immagine" value="{{$comic->thumb}}">
        </div>

        <div class="form-group">
            <label for="price">Prezzo</label>
            <input class="form-control" type="number" step="any" min="0" id="price" name="price" value="{{$comic->price}}">
        </div>

        <div class="form-group">
            <label for="series">Serie</label>
            <input class="form-control" type="text" name="series" id="series" placeholder="Inserisci la serie" value="{{$comic->series}}">
        </div>

        <div class="form-group">
            <label for="sale_date">Data di vendita</label>
            <input class="form-control" type="date" name="sale_date" id="sale_date" format="yyyy-MM-dd" value="{{$comic->sale_date}}">
        </div>

        <div class="form-group">
            <label for="type">Tipologia</label>
            <input class="form-control" type="text" name="type" id="type" placeholder="Inserisci la tipologia" value="{{$comic->type}}">
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <button type="submit">Modifica</button>
    </form>
</div>

@endsection
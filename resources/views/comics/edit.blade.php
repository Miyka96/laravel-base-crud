@extends('layouts.app')
@section('content')

<div class="container">
    <h1>Modifica Comic:</h1>
</div>
<div class="container">

    <form action="{{route('Comic.update',$comic->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" placeholder="Inserisci il titolo" value="{{$comic->title}}">
        </div>

        <div>
            <label for="description"> Descrizione </label>
            <textarea id="description" name="description" maxlength="200" placeholder="Inserisci la descrizione">{{$comic->description}}</textarea>
        </div>

        <div>
            <label for="thumb">Immagine</label>
            <input type="text" name="thumb" id="thumb" placeholder="Inserisci url immagine" value="{{$comic->thumb}}">
        </div>

        <div>
            <label for="price">Prezzo</label>
            <input type="number" step="any" min="0" id="price" name="price" value="{{$comic->price}}">
        </div>

        <div>
            <label for="series">Serie</label>
            <input type="text" name="series" id="series" placeholder="Inserisci la serie" value="{{$comic->series}}">
        </div>

        <div>
            <label for="sale_date">Data di vendita</label>
            <input type="date" name="sale_date" id="sale_date" format="yyyy-MM-dd" value="{{$comic->sale_date}}">
        </div>

        <div>
            <label for="type">Tipologia</label>
            <input type="text" name="type" id="type" placeholder="Inserisci la tipologia" value="{{$comic->type}}">
        </div>

        <button type="submit">Modifica</button>
    </form>
</div>

@endsection
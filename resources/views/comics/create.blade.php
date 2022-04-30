@extends('layouts.app')
@section('content')

<div class="container">
    <h1>Crea nuovo Comic:</h1>
</div>
<div class="container">
    <form action="{{route('Comic.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titolo</label>
            <input class="form-control" type="text" name="title" id="title" placeholder="Inserisci il titolo" value="{{old('title')}}">
        </div>

        <div class="form-group">
            <label for="description"> Descrizione </label>
            <textarea class="form-control" id="description" name="description" maxlength="200" placeholder="Inserisci la descrizione">
                {{old('description')}}
            </textarea>
        </div>

        <div class="form-group">
            <label for="thumb">Immagine</label>
            <input class="form-control" type="text" name="thumb" id="thumb" placeholder="Inserisci url immagine" value="{{old('thumb')}}">
        </div>

        <div class="form-group">
            <label for="price">Prezzo</label>
            <input class="form-control" type="number" step="any" min="0" id="price" name="price" value="{{old('price')}}">
        </div>

        <div class="form-group">
            <label for="series">Serie</label>
            <input class="form-control" type="text" name="series" id="series" placeholder="Inserisci la serie" value="{{old('series')}}">
        </div>

        <div class="form-group">
            <label for="sale_date">Data di vendita</label>
            <input class="form-control" type="date" name="sale_date" id="sale_date" format="yyyy-MM-dd" value="{{old('sale_date')}}">
        </div>

        <div class="form-group">
            <label for="type">Tipologia</label>
            <input class="form-control" type="text" name="type" id="type" placeholder="Inserisci la tipologia" value="{{old('type')}}">
        </div>

        <button type="submit">Crea</button>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </form>
</div>

@endsection
@extends('layouts.app')

@section('content')

<img class="img-thumbnail " src="{{$comics->thumb}}" alt="">
<h1>
    {{$comics->title}}
</h1>
<h3>
   Price: {{$comics->price}}
</h3>
<h4>
    Series: {{$comics->series}}  <br>
    Type: {{$comics->type}}
    SaleDate: {{$comics->sale_date}}
</h4>
<p>{{$comics->description}}</p>

@endsection
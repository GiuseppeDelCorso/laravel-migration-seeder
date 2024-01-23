@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">
            @foreach ($train as $movies)
                <div class="col-2">
                    <h3>{{$movies->title}}</h3>
                    <p>Titolo Originale -> {{$movies->original_title}}</p>
                    <p>Lingua -> {{$movies->nationality}}</p>
                    <p>Data -> {{$movies->date}}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
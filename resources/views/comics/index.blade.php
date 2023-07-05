@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Welcome Page</h1>
    <div class="row g-4">
        <div class="col">
            <div>
                <button class="btn btn-primary my-4"><a class="text-light" href="{{ route("comics.create") }}">Aggiungi Nuovo</a></button>
            </div>
        </div>
    </div>
    <div>
        <ul>
            @foreach ($comics as $comic)
                <li> <a href="{{ route("comics.show", $comic->id) }}">{{$comic->title}}</a></li>
            @endforeach
        </ul>
    </div>

</div>
@endsection
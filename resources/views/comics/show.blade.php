@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Dettagli:</h1>
    <div class="row g-4">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$comic->title}}</h5>
                  <p class="card-text">{{$comic->description}}</p>
                  <a href="{{ route("home")}}" class="btn btn-primary">Torna alla lista comics</a>
                  <a href="{{ route("comics.edit", $comic->id)}}" class="btn btn-primary my-2">Modifica Comics</a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
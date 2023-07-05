@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1 class="my-4">Dettagli:</h1>
    <div class="row g-4">
        <div class="col">
            <div class="card mx-auto" style="width: 25rem;">
                <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$comic->title}}</h5>
                    <p class="card-text">{{$comic->description}}</p>
                    <a href="{{ route("home")}}" class="btn btn-primary">Torna alla lista comics</a>
                    <a href="{{ route("comics.edit", $comic->id)}}" class="btn btn-primary my-2">Modifica Comics</a>
                    <form action="{{route('comics.destroy', $comic)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Cancella Comic">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
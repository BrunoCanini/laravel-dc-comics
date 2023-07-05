@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Dettagli: {{$comic->title}}</h1>
    <div class="row g-4">
        <div class="col">
            <div>
                <a href="{{ route("home")}}">Torna alla lista comics</a>
            </div>
        </div>
    </div>
</div>
@endsection
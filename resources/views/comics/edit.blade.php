@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1 class="text-center py-3">Create Comic</h1>
    <div class="row g-4">
        <div class="col-6 mx-auto">
            <form action="{{route('comics.update', $comic->id)}}" method="post" class="needs-validation">
                @csrf

                @method("PUT")

                <label for="name">Title</label>
                <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{$comic->title}}">
                @error("title")
                <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="name">Description</label>
                <input class="form-control @error('description') is-invalid @enderror" type="text" name="description" id="title" value="{{$comic->description}}">
                @error("description")
                <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="name">Thumb</label>
                <input class="form-control @error('thumb') is-invalid @enderror" type="text" name="thumb" id="title" value="{{$comic->thumb}}">
                @error("thumb")
                <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="name">Price</label>
                <input class="form-control @error('price') is-invalid @enderror" type="text" name="price" id="title" value="{{$comic->price}}">
                @error("price")
                <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="name">Series</label>
                <input class="form-control @error('series') is-invalid @enderror" type="text" name="series" id="title" value="{{$comic->series}}">
                @error("series")
                <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="name">Sale Date</label>
                <input class="form-control @error('sale_date') is-invalid @enderror" type="text" name="sale_date" id="title" value="{{$comic->sale_date}}">
                @error("sale_date")
                <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="name">Type</label>
                <input class="form-control @error('type') is-invalid @enderror" type="text" name="type" id="title" value="{{$comic->type}}">
                @error("type")
                <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <input class="form-control my-4" type="submit">
  
            </form>
        </div>
    </div>

</div>
@endsection
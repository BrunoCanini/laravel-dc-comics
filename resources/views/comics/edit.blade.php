@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1 class="text-center py-3">Create Comic</h1>
    <div class="row g-4">
        <div class="col-6 mx-auto">
            <form action="{{route('comics.update', $comic->id)}}" method="post">
                @csrf

                @method("PUT")

                <label for="name">Title</label>
                <input class="form-control" type="text" name="title" id="title" value="{{$comic->title}}">

                <label for="name">Description</label>
                <input class="form-control" type="text" name="description" id="title" value="{{$comic->description}}">

                <label for="name">Thumb</label>
                <input class="form-control" type="text" name="thumb" id="title" value="{{$comic->thumb}}">

                <label for="name">Price</label>
                <input class="form-control" type="text" name="price" id="title" value="{{$comic->price}}">

                <label for="name">Series</label>
                <input class="form-control" type="text" name="series" id="title" value="{{$comic->series}}">

                <label for="name">Sale Date</label>
                <input class="form-control" type="text" name="sale_date" id="title" value="{{$comic->sale_date}}">

                <label for="name">Type</label>
                <input class="form-control" type="text" name="type" id="title" value="{{$comic->type}}">

                <input class="form-control my-4" type="submit">
  
            </form>
        </div>
    </div>

</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1 class="text-center py-3">Create Comic</h1>
    <div class="row g-4">
        <div class="col-6 mx-auto">
            <form action="{{route('comics.store')}}" method="post">
                @csrf

                <label for="name">Title</label>
                <input class="form-control" type="text" name="title" id="title">

                <label for="name">Description</label>
                <input class="form-control" type="text" name="description" id="title">

                <label for="name">Thumb</label>
                <input class="form-control" type="text" name="thumb" id="title">

                <label for="name">Price</label>
                <input class="form-control" type="text" name="price" id="title">

                <label for="name">Series</label>
                <input class="form-control" type="text" name="series" id="title">

                <label for="name">Sale Date</label>
                <input class="form-control" type="text" name="sale_date" id="title">

                <label for="name">Type</label>
                <input class="form-control" type="text" name="type" id="title">

                <input class="form-control my-4" type="submit">
  
            </form>
        </div>
    </div>

</div>
@endsection
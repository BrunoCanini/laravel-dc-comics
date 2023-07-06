@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1 class="text-center py-3">Create Comic</h1>
    <div class="row g-4">
        <div class="col-6 mx-auto">
            <form action="{{route('comics.store')}}" method="post" class="needs-validation">
                @csrf

                <label for="name">Title</label>
                <input class="form-control  @error('title') is-invalid @enderror"  type="text" name="title" id="title" value="{{old("title")}}">
                @error("title")
                <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="name">Description</label>
                <input class="form-control @error('title') is-invalid @enderror" type="text" name="description" id="title" value="{{old("description")}}">
                @error("description")
                <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="name">Thumb</label>
                <input class="form-control @error('title') is-invalid @enderror" type="text" name="thumb" id="title" value="{{old("thumb")}}">
                @error("thumb")
                <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="name">Price</label>
                <input class="form-control @error('title') is-invalid @enderror" type="text" name="price" id="title" value="{{old("price")}}">
                @error("price")
                <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="name">Series</label>
                <input class="form-control @error('title') is-invalid @enderror" type="text" name="series" id="title" value="{{old("series")}}">
                @error("series")
                <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="name">Sale Date</label>
                <input class="form-control @error('title') is-invalid @enderror" type="text" name="sale_date" id="title" value="{{old("sale_date")}}">
                @error("sale_date")
                <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="name">Type</label>
                <input class="form-control @error('title') is-invalid @enderror" type="text" name="type" id="title" value="{{old("type")}}">
                @error("type")
                <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <input class="form-control my-4" type="submit">
  
            </form>
        </div>
    </div>

</div>
@endsection
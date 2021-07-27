@extends('layouts.app')

@section('content')

<div class="card-body">
    <div class="form">

        <form action="{{route ('film.update',$film->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" value="{{$film->title}}">
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">Poster</label>
                <input class="form-control" type="file" id="formFile" name="image" value="{{$film->image}}">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-outline-dark btn-lg ">Add</button>
            </div>
        </form>

    </div>

@endsection

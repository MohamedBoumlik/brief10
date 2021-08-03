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
                <label for="exampleInputEmail1" class="form-label">Type</label>
                <select class="form-select" aria-label="Default select example" name="type" required>
                    <option selected>Select The Type</option>

                    @foreach ($types as $genre)
                        <option value="{{$genre->id}}">{{$genre->type}}</option>
                    @endforeach
                    
                </select>
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">Poster</label>
                <input class="form-control" type="file" id="formFile" name="image" value="{{$film->image}}">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-outline-dark btn-lg ">Edit</button>
            </div>
        </form>

    </div>

@endsection

{{-- style --}}

@section('css')
    <link rel="stylesheet" href="{{ asset('style/Home.css') }}">  
@endsection
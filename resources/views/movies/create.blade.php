@extends('layouts.app')

@section('content')

<div class="card-body">
    <div class="form">

        <form action="{{route ('film.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">Poster</label>
                <input class="form-control" type="file" id="formFile" name="image">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-outline-dark btn-lg ">Add</button>
            </div>
        </form>

    </div>

@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('style/Home.css') }}">  
@endsection
@extends('layouts.app')

@section('content')

    <h1 class="text-center">Create a watchlist that refers to your good taste</h1><br>
    @if (count($user->films) === 0)
         <div class="text-center">
        <button class="btn-lg" id="btn">Start your own list</button>
    </div>
    @endif
   
        @foreach ($user->films as $film)
            

            <div class="col-lg-3 sm-12">
                
                <a href="{{route('film.show',$film->id)}}">

                    <div class="card m-auto" style="width: 13rem;">
                        
                        <img src="/../img/{{$film->image}}" class="card-img-top" alt="..." style="height: 20rem">
                        <div class="card-body">
                            <p class="card-text">{{$film->title}}</p>
                        </div>
                        <form action="{{route("watchlist.destroy",$film->id)}}" method="POST">
                            @csrf
                            @method("delete")
                            <button type="submit" class="btn btn-danger">
                                Delete
                            </button>
                        </form>
                    </div>

                </a>

            </div>       
    
        @endforeach
    

@endsection

{{-- style --}}

@section('css')
    <link rel="stylesheet" href="{{ asset('style/Home.css') }}">
@endsection
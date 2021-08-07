@extends('layouts.app')

@section('content')

    <h1 class="text-center pt-2">Create a watchlist that refers to your good taste</h1><br>
    @if (count($user->films) === 0)
        <div class="text-center">
           <a href="{{route('home')}}"> <button class="btn btn-lg btn-outline-secondary" id="btn" >Start your own list</button> </a>
        </div>
    @endif
   
    <div class="container">

        <div class="row">

            @foreach ($user->films as $film)

            
                <div class="col-lg-3 sm-12 p-2">
                    
                    <a href="{{route('film.show',$film->id)}}">

                        <div class="card m-auto" style="width: 13rem;">
                            
                            <img src="/../img/{{$film->image}}" class="card-img-top" alt="..." style="height: 20rem">
                            <div class="card-body">
                                <p class="card-text text-center">{{$film->title}}</p>
                            </div>
                            <form action="{{route("watchlist.destroy",$film->id)}}" method="POST" class="m-auto pb-1">
                                @csrf
                                @method("delete")
                                <button type="submit" class="btn btn-outline-danger">
                                    Delete
                                </button>
                            </form>
                        </div>

                    </a>

                </div>   
                    
            @endforeach

        </div>  

    </div>  
    

@endsection

{{-- style --}}

@section('css')
    <link rel="stylesheet" href="{{ asset('style/Home.css') }}">
@endsection
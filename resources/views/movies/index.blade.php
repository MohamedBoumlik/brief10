@extends('layouts.app')

@section('content')
<h3 class="text-center"><a href="{{route('film.create')}}"><button class="btn btn-outline-secondary btn-lg">Create</button></a></h3><br><br>
{{-- <div class="card">
    @foreach ($films as $film)
       {{$film->title}}  ___  {{$film->created_at}}  ___ <a href="{{route('film.edit',$film->id)}}"><button>edit</button></a> __ <form action="{{route('film.delete',$film->id)}}" method="POST"> @csrf @method('DELETE')<button>Delete</button></form> __ <a href="{{route('film.show',$film->id)}}"><button>show</button></a><br>
    @endforeach
</div> --}}

<div class="container">

    <div class="row">

        @foreach ($films as $film)
            

            <div class="col">
                
                <a href="{{route('film.show',$film->id)}}">

                    <div class="card" style="width: 13rem;">
                        
                        <img src="/../img/{{$film->image}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">{{$film->title}}</p>
                        </div>

                    </div>

                </a>

                <a href="{{route('film.edit',$film->id)}}"><button class="btn btn-outline-info m-auto">edit</button></a> <form action="{{route('film.delete',$film->id)}}" method="POST"> @csrf @method('DELETE')<button class="btn btn-outline-danger m-auto">Delete</button></form> <a href="{{route('film.show',$film->id)}}"><button class="btn btn-outline-dark m-auto">show</button></a>

            </div>       
    
        @endforeach

    </div>
</div>

@endsection

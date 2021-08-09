@extends('layouts.app')

@section('content')
<h3 class="text-center"><a href="{{route('film.create')}}"><button class="btn btn-outline-secondary btn-lg mt-3">Create</button></a></h3><br><br>
{{-- <div class="card">
    @foreach ($films as $film)
       {{$film->title}}  ___  {{$film->created_at}}  ___ <a href="{{route('film.edit',$film->id)}}"><button>edit</button></a> __ <form action="{{route('film.delete',$film->id)}}" method="POST"> @csrf @method('DELETE')<button>Delete</button></form> __ <a href="{{route('film.show',$film->id)}}"><button>show</button></a><br>
    @endforeach
</div> --}}


<div class="container">
    @if (session("addflm"))
        <div class="alert alert-success">{{session("addflm")}}</div>
    @endif
    
    @if (session('editflm'))
        <div class="alert alert-success">{{session("editflm")}}</div>
    @endif
    
    @if (session("dltfilm"))
        <div class="alert alert-danger">{{session("dltfilm")}}</div>
    @endif

    <div class="row m-auto">

        @foreach ($films as $film)
            

            <div class="col-lg-3 sm-12">
                
                <a href="{{route('film.show',$film->id)}}">

                    <div class="card m-auto" style="width: 13rem;">
                        
                        <img src="/../img/{{$film->image}}" class="card-img-top" alt="..." style="height: 20rem">
                        <div class="card-body">
                            <p class="card-text">{{$film->title}}</p>
                        </div>

                    </div>

                </a>
                <div class="row display-flex flex-deriction-column justify-content-center">
                    <div class="colb d-flex m-3">
                        <a href="{{route('film.edit',$film->id)}}" class="btn btn-outline-info m-2">Edit</a> <form action="{{route('film.destroy',$film->id)}}" method="POST"> @csrf @method('DELETE')<button class="btn btn-outline-danger m-2">Delete</button></form> <a href="{{route('film.show',$film->id)}}" class="btn btn-outline-dark m-2">Show</a><br>
                    </div>
                </div>
                

            </div>       
    
        @endforeach
    </div>

</div>
<div class="d-flex justify-content-center">
    <span class="mt-4">{{$films->links("pagination::bootstrap-4")}}</span>
</div>

@endsection

{{-- style --}}

@section('css')
    <link rel="stylesheet" href="{{ asset('style/Home.css') }}">  
@endsection
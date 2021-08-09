@extends('layouts.app')

@section('content')


    @foreach ($films as $film)
                
    <div class="row d-flex m-4">
        <div class="col-md-4 sm-12">
            
            <a href="{{route('film.show',$film->id)}}">

                <div class="card m-auto" style="width: 13rem;">
                    
                    <img src="/../img/{{$film->image}}" class="card-img-top" alt="..." style="height: 20rem">
                    <div class="card-body">
                        <p class="card-text">{{$film->title}}</p>
                    </div>

                </div>
                
            </a><br>
        </div>    

        <div class="col-md-8 " id="row">

            {{-- table --}}

            <div id="table">
                <table class="table table-hover">
                    <tr>
                        <th>User</th>
                        <th>Comment</th>
                    </tr>

                    @foreach ($film->comments() as $comment)

                    <tr>
                        <td>{{$comment->user()->name}}</td>
                        <td>{{$comment->text}}</td>
                    </tr>

                    @endforeach

                </table>
            </div>
        </div>

    </div>
    @endforeach

    <div class="d-flex justify-content-center">
        <span class="mt-4">{{$films->links("pagination::bootstrap-4")}}</span>
    </div>
@endsection

{{-- style --}}

@section('css')
    <link rel="stylesheet" href="{{ asset('style/Home.css') }}">  
@endsection
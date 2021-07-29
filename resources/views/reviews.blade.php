@extends('layouts.app')

@section('content')


    @foreach ($films as $film)
                

        <div class="col">
            
            <a href="{{route('film.show',$film->id)}}">

                <div class="card m-auto" style="width: 13rem;">
                    
                    <img src="/../img/{{$film->image}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">{{$film->title}}</p>
                    </div>

                </div>

            </a><br>

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

    @endforeach
    
@endsection

{{-- style --}}

@section('css')
    <link rel="stylesheet" href="{{ asset('style/Home.css') }}">  
@endsection
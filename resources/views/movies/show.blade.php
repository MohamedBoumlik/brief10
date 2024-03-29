@extends('layouts.app')

@section('content')
    <div class="container">
        
        <div class="card-body">


            <div class="card m-auto" style="width: 13rem;">
                                
                
                <img src="/../img/{{$film->image}}" alt="..." class="card-img-top" style="height: 20rem">
                <div class="card-body">
                    <p class="card-text">{{$film->title}}</p>
                </div>

            </div><br>



        </div>

        {{-- adding comment --}}

        <div class="form">
            <form action="{{route ('comment.store')}}" method="POST">
                @csrf
                @method('post')
                <div class="mb-3">
                    <label for="floatingTextarea2">Comment :</label>
                    <textarea class="form-control" id="floatingTextarea2" style="height: 100px" name="comment"></textarea>
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <input type="hidden" name="film_id" value="{{$film->id}}">
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-outline-dark btn-lg" >Add Comment</button><br>
                </div>

            </form>
        </div><br>

        {{-- @foreach ($film->comments() as $comment)

            {{$comment->user()->name}} :  {{$comment->text}} <br>
            
        @endforeach --}}


        <div id="table">
            <table class="table table-hover table-bordered">
                <tr>
                    <th>User</th>
                    <th>Comment</th>
                </tr>

                @foreach ($film->comments() as $comment)
                            
                <tr>
                    <td>{{$comment->user()->name}}</td>
                    <td>{{$comment->text}} 
                        @if (auth()->user()->role ==='admin')
                            
                            <form action="{{route('comment.destroy',$comment->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-outline-danger">Delete</button>
                            </form>

                        @endif
                    
                    </td>
                </tr>

                @endforeach

            </table>
        </div>
    </div>

@endsection

{{-- style --}}

@section('css')
    <link rel="stylesheet" href="{{ asset('style/Home.css') }}">  
@endsection
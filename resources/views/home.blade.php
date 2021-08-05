@extends('layouts.app')

@section('content')

    <!--------------------------------------- slide --------------------------------------->
    <div class="background">

        <img class="mySlides" src="{{ asset('img/1.jpg') }}" alt="">
        <img class="mySlides" src="{{ asset('img/2.jpg') }}" alt="">
        <img class="mySlides" src="{{ asset('img/3.jpg') }}" alt="">

        <div class="center">
        
        <h1 >To Watch</h1>

        <p class="text-center">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus praesentium
            labore accusamus sequi, voluptate debitis tenetur in deleniti possimus modi voluptatum
            neque maiores dolorem unde? Aut dolorum quod excepturi fugit.
        </p>

        <button type="button" class="btn btn-outline-light m-auto" 
        onClick="parent.location='#new'"> New Movies </button>
        
        </div>
    </div>

    <h2 class="text-center" id="h">Welcome Back To Our Site</h2><br>

    <!--------------------------------------- New Movies --------------------------------------->
<div class="container">
    <h4>New Movies</h4>
        <hr>
    <div class="row" id="slide">

        @foreach ($new as $mv)
            

            <div class="col">
                
                <a href="{{route('film.show',$mv->id)}}">

                    <div class="card" style="width: 13rem;">
                        
                        <img src="/../img/{{$mv->image}}" class="card-img-top" alt="..." style="height: 20rem">
                        <div class="card-body">
                            <p class="card-text">{{$mv->title}}</p>
                        </div>

                    </div>

                </a>

            </div>       
    
        @endforeach

    </div><br>

    <!--------------------------------------- Action Movies --------------------------------------->

    @foreach ($categories as $category)
        <h4>{{$category->type}} Movies</h4>
        <hr>
        
        <div class="row" id="slide">

            @foreach ($category->movies() as $film)
                

                <div class="col">
                    
                    <a href="{{route('film.show',$film->id)}}">

                        <div class="card" style="width: 13rem;">
                            
                            <img src="/../img/{{$film->image}}" class="card-img-top" alt="..." style="height: 20rem">
                            <div class="card-body">
                                <p class="card-text">{{$film->title}}</p>
                            </div>

                        </div>

                    </a>

                </div>       
        
            @endforeach

        </div><br>
    @endforeach

</div>    

@endsection

{{-- style --}}

@section('css')
    <link rel="stylesheet" href="{{ asset('style/Home.css') }}">  
@endsection

{{-- script --}}

@section('script')
    <script src="{{asset('script/script.js')}}"></script>
@endsection
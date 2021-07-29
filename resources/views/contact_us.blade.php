@extends('layouts.app')

@section('content')

    <!-- form -->

    <div class="form">

        <form>

            <div class="mb-3">
                <label for="name" class="form-label">Name :</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Last Name :</label>
                <input type="text" class="form-control" name="last-name">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email :</label>
                <input type="email" class="form-control" name="email">
            </div>
  
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Subjet :</label>
                <input type="text" class="form-control" name="subject">
            </div>

            <div class="mb-3">
                <label for="floatingTextarea2">Message :</label>
                <textarea class="form-control" id="floatingTextarea2" style="height: 100px"></textarea>
            </div>
            <div class="text-center">
             <button type="submit" class="btn btn-outline-light btn-lg" >Send</button><br>
            </div>

        </form>

    </div>

@endsection

{{-- style --}}

@section('css')
    <link rel="stylesheet" href="{{ asset('style/contact_us.css') }}">  
@endsection
@extends('layouts.app')

@section ('content')
    <div>
        
        <div class="container d-flex justify-content-center">
            
            <div class="card" style="width: 40rem;">
                <h1 class="text-center my-2">Contacts</h1>
                <div class="card-body">
                    
                    <h5 class="card-title">Contact Us At:</h5>

                    <div class="email">

                        <span class="card-text">Email:</span>
                        <a href="#" class="card-link">movie@movie.movie</a>

                    </div>

                    <div class="phone">

                        <span class="card-text"> Phone: </span>
                        <a href="#" class="card-link">12345670</a>

                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center my-5">
            <button class="my_btn"><a href="{{route('home')}}">Go back to the home page</a></button>

        </div>

    </div>
@endsection
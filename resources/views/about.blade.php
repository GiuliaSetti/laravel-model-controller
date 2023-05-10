@extends('layouts.app')

@section ('content')
    <div>
        
        <div class="container d-flex justify-content-center">
            
            <div class="card" style="width: 40rem;">
                <h1 class="text-center my-2">About Us</h1>
                <div class="card-body">
                    
                    <h5 class="card-title">Background Story About Us:</h5>

                    <div class="email">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi minima minus numquam. Ut, veritatis odio? Praesentium, natus nihil aut neque corporis ab officiis dignissimos magnam quam. Numquam beatae ab labore.</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center my-5">
            <button class="my_btn"><a href="{{route('home')}}">Go back to the home page</a></button>

        </div>

    </div>
@endsection
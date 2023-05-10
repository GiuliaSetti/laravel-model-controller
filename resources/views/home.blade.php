@extends ('layouts.app')

@section ('content')

<main>

    <div class="title_container">
        <h1 class="title text-center">List Of Movies</h1>

    </div>
    <div class="container my-5">
        <div class="card_container my-5">
            <div class="d-flex flex-wrap gap-3 justify-content-center">
                @foreach ($movies as $movie)
                <div class="card text-bg-warning mb-1" style="width: 18rem;">
                    <div class="card-header">{{$movie['title']}}</div>
                    <div class="card-body text-center">
                        <h5 class="card-title">{{$movie['original_title']}}</h5>
        
                        <div class="card-info">
                            
                            <div class="text-uppercase">
                                {{$movie['nationality']}}
                            </div>
                            <div class="fst-italic">
                                Release date: {{$movie['date']}}
                            </div>
                            <div>
                                Vote:
                                <span class="fw-semibold">{{$movie['vote']}}</span>
                            </div>
        
                        </div>
                        
        
                    </div>
                </div>
                @endforeach

                

            </div>

        </div>

        
    </div>

</main>
@endsection
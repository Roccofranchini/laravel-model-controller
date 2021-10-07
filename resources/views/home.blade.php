@extends('layouts.main')

@section('title') MyMovies @endsection

@section('content')
    <section id="home" class="mt-4">
        <div class="container">
            <div class="row gy-4">
                @forelse ($movies as $movie)
                <div class="card m-3" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title">{{$movie->title}}</h5>
                    <p class="card-text">{{$movie->original_title}}</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{$movie->nationality}}</li>
                    <li class="list-group-item">{{$movie->date}}</li>
                  </ul>
                  <div class="card-body">
                    <a href="#" class="card-link">{{$movie->vote}}</a>
                  </div>
                </div>
                @empty
                    <h2>Nessun Film</h2>
                @endforelse
            </div>
        </div>
    </section>
@endsection


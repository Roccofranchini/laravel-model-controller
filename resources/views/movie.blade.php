@extends('layouts.main')

@section('title')  {{$movie->title}} @endsection

@section('content')
    <section id="movie-info" class="container d-flex align-item-center justify-content-center">
        <div class="card m-3 w-50 text-center" style="width: 18rem;">
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
    </section>
@endsection
@extends('comics.layouts.base')

@section('title', 'Comics')

@section('content')
    @foreach ($comics as $comic)
      <div class="card mb-3" style="width: 18rem;">
        <img class="card-img-top" src="{{ $comic->thumb }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $comic->title }}</h5>
          <p class="card-text">Sale date: {{ $comic->sale_date }}</p>
          <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-primary">More</a>
        </div>
      </div>
    @endforeach
@endsection

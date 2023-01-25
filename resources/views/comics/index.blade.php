@extends('comics.layouts.base')

@section('title', 'Comics')

@section('delete-alert')
    @if (session('delete_success'))
        <div class="alert alert-success">
            {{ session('delete_success') }}
        </div>
    @endif
@endsection

@section('content')
    @foreach ($comics as $comic)
      <div class="card mb-3" style="width: 18rem;">
        <img class="card-img-top" src="{{ $comic->thumb }}" alt="Card image cap">
        <div class="card-body position-relative" style="height: 12rem;">
          <h5 class="card-title">{{ $comic->title }}</h5>
          <p class="card-text">Sale date: {{ $comic->sale_date }}</p>
          <div class="m-3 position-absolute start-0 bottom-0 d-flex">
            <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-primary me-3">More</a>
            <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-warning me-3">Edit</a>
            <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="post" class="me-3">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger">Delete</button>
            </form>
          </div>
        </div>
      </div>
    @endforeach
@endsection

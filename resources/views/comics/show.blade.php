@extends('comics.layouts.base')

@section('title')
    {{ $comic->title }}
@endsection

@section('content')
    <div class="container border border-4 border-success rounded-3">
        <div class="row">
            <div class="col-8 d-flex flex-column align-items-center">
                <p class="card-text mt-4">{{ $comic->description }}</p>
                <h5 class="mt-3">Type: {{ $comic->type }}</h5>
            </div>
            <div class="col-4 border">
                <div class="text-center">
                    <img src="{{ $comic->thumb }}" alt="" style="width: 200px; height: 200px; object-fit: cover; object-position: top center" class="mt-2">
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <h5 class="m-3">{{ $comic->price }} $</h5>
                    <a href="#" class="btn btn-primary">BUY</a>
                </div>
            </div>
        </div>
    </div>
@endsection

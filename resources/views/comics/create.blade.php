@extends('comics.layouts.base')

@section('title', 'New Comic')

@section('content')
    <div class="container">
        <form method="post" action="{{ route('comics.store') }}">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea type="text" class="form-control" id="description" name="description" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

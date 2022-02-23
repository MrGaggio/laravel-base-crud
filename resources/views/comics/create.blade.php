@extends('layouts.base')


@section('documentTitle')
{{ $title ?? '' }}
@endsection



@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <form action="{{ route('comics.store') }}" method="post">
        @csrf
        @method('POST')

        <div class="mb-3">
          <label for="author" class="form-label">Author</label>
          <input type="text" class="form-control" id="author" name="brand">
        </div>

        <div class="mb-3">
          <label for="publisher" class="form-label">publisher</label>
          <input type="text" class="form-control" id="publisher" name="publisher">
        </div>

        <div class="mb-3">
          <label for="page_number" class="form-label">page number</label>
          <input type="number" class="form-control" id="page_number" name="page_number">
        </div>

        <div class="mb-3">
          <label for="relase" class="form-label">relase</label>
          <input type="text" class="form-control" id="relase" name="relase">
        </div>

        <div class="mb-3">
          <label for="price" class="form-label">price</label>
          <input type="number" class="form-control" id="price" name="price">
        </div>

        <div class="mb-3">
          <label for="photo" class="form-label">photo</label>
          <input type="text" class="form-control" id="photo" name="photo">
        </div>

        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

@endsection
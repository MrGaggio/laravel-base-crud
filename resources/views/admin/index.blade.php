@extends('admin.layout.base')

@section('documentTitle')
    ComicsIndex
@endsection

@section('content')
    @foreach ($comics as $comic)
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">author</th>
            <th scope="col">publisher</th>
            <th scope="col">page_number</th>
            <th scope="col">relase</th>
            <th scope="col">price</th>
            <th scope="col">Actions</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{$comic->id}}</td>
            <td>{{$comic->author}}</td>
            <td>{{$comic->publisher}}</td>
            <td>{{$comic->page_number}}</td>
            <td>{{$comic->relase}}</td>
            <td>
                <a class="btn btn-default" href="{{route('comics.show', $comic)}}">view</a>
                <a class="btn btn-primary" href="{{route('comics.edit', $comic)}}">edit</a>
            </td>

          </tr>
 
        </tbody>
      </table>
    @endforeach
@endsection
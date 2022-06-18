@extends('layouts.app');

@section('content')
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Image</th>
        <th scope="col">Anno di Publicazione</th>
        <th scope="col">Descrizione</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
        <tr>
            <th>{{$book->id}}</th>
            <td>{{$book->title}}</td>
            <td>
                <img src="{{$book->image}}" alt="{{$book->title}}" style="width: 200px">
            </td>
            <td>{{$book->edition_year}}</td>
            <td>{{$book->description}}</td>
          </tr>
        @endforeach
    </tbody>
  </table>
@endsection
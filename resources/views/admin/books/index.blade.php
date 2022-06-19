@extends('layouts.app');

@section('content')
<h1 class="text-uppercase text-primary text-center">Book List</h1>

{{-- includo pop-up message --}}
@include('includes.message')
<div class="mb-3">
    <a class="btn btn-info" href="{{route('admin.books.create')}}"> Aggiungi un nuovo libro alla lista</a>
</div>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Image</th>
        <th scope="col">Anno di Publicazione</th>
        <th scope="col">Descrizione</th>
        <th scope="col">Azioni</th>
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
            <td>
                <a href="{{route('admin.books.show', $book->id)}}" class="btn btn-primary">view</a>
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
@endsection
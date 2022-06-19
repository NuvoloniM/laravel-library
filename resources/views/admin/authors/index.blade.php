@extends('layouts.app')

@section('content')
    <h1 class="text-uppercase text-primary text-primary text-center">Authors List</h1>
    <div class="container">
      <a class="btn btn-primary" href="{{route('admin.authors.create')}}">Create a new author</a>
        @include('includes.message')
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Year of Birth</th>
                <th scope="col">where</th>
                <th scope="col">Life Story</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($authors as $author)
                <tr>
                    <th scope="row">{{$author->id}}</th>
                    <td>{{$author->name}}</td>
                    <td>{{$author->author_year}}</td>
                    <td>{{$author->where}}</td>
                    <td>{{$author->life_story}}</td>
                    <td>
                        <a class="btn btn-info" href="{{route('admin.authors.show', $author->id)}}">View</a>
                        <a class="btn btn-warning" href="{{route('admin.authors.edit', $author->id)}}">Edit</a>
                        @include('includes.deleteAuthor')
                    </td>
                  </tr>
                @endforeach
              
            </tbody>
          </table>
    </div>
@endsection
@section('scripts')
    <script src="{{asset('js/deleteMessage.js')}}"></script>
@endsection
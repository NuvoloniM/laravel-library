@extends('layouts.app')
@section('content')
<div class="card ">
    <div class="card-body">
      <h5 class="card-title">{{$author->name}}</h5>
      <h6 class="card-title">{{$author->author_year}}</h6>
      <h6 class="card-title">{{$author->where}}</h6>
      <p class="card-text">{{$author->life_story}}</p>
        @include('includes.deleteAuthor')
    </div>
  </div>
@endsection
@section('scripts')
  <script src="{{asset('js/deleteMessage.js')}}"></script>
@endsection
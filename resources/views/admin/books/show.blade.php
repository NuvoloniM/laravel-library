@extends('layouts.app')

@section('content')
<div class="container">
  @include('includes.message')
    <div class="card mx-auto" style="width: 18rem;">
        <img src="{{$book->image}}" class="card-img-top" alt="{{$book->title}}">
        <div class="card-body">
          <h5 class="card-title">{{$book->title}}</h5>
          <h6 class="card-title">{{$book->edition_year}}</h6>
          <p class="card-text">{{$book->description}}</p>
          @include('includes.deleteBook')
        </div>
    </div>
</div>
@endsection
@section('scripts')
  <script src="{{asset('js/deleteMessage.js')}}"></script>
@endsection
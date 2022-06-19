@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{route('admin.authors.update', $author->id)}}">
        @method('PUT')
      @csrf
        <div class="form-group">
          <label for="name">Author Name</label>
          <input type="text" class="form-control" id="name" name="name" value="{{old('name',$author->name)}}">
        </div>
        <div class="form-group">
          <label for="life_story">Author Biography</label>
          <textarea class="form-control" id="life_story"  name="life_story" >
            {{old('life_story',$author->life_story)}}
          </textarea>
        </div>
        <div class="form-group">
          <label for="author_year">Author Year of Birth</label>
          <input type="text" class="form-control" id="author_year"  name="author_year" value="{{old('author_year',$author->author_year)}}">
        </div>
        <div class="form-group">
          <label for="where">Author Birth Place</label>
          <input type="text" class="form-control" id="where"  name="where" value="{{old('where',$author->where)}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

@endsection
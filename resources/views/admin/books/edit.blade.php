@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{route('admin.books.update', $book->id)}}" >
            @method('PUT')
            @csrf
            <div class="form-group">
              <label for="title">Inserisci il Titolo</label>
              <input type="text" class="form-control" id="title" name="title" value="{{old('title', $book->title)}}">
            </div>
            <div class="form-group">
              <label for="image">Inserisci l'URL dell'immagine</label>
              <input type="text" class="form-control" id="image" name="image" value="{{old('image', $book->image)}}">
            </div>
            <div class="form-group">
              <label for="edition_year">Inserisci l'anno di pubblicazione dell'edizione</label>
              <input type="number" class="form-control" id="edition_year" name="edition_year" value="{{old('edition_year', $book->edition_year)}}">
            </div>
            <div class="form-group">
              <label for="description">Inserisci una sdescrizione</label>
              <textarea  class="form-control" id="description" name="description"> 
                {{old('decription', $book->description)}}
              </textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection
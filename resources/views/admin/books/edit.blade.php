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
              <label for="author">Seleziona l'autore</label>
              <select name="author_id" id="author">
                <option value="">Nessun Autore</option>
                @foreach ($authors as $author)
                    <option
                    @if (old('$author->id', $book->author_id)  == $author->id) selected @endif 
                    value="{{$author->id}}"> {{$author->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="genre">Seleziona uno o più generi</label>
              @foreach ( $genres as $genre )
              <div class="form-check form-check-inline">
                <input
                    class="form-check-input"
                    type="checkbox"
                    id="genre-{{ $genre->id }}"
                    value=" {{ $genre->id }} "
                    name="genres[]"
                    @if ( in_array($genre->id, old('genres', $book_genre_id ) ) ) checked @endif
                >
                <label class="form-check-label" for="genre-{{ $genre->id }}">{{ $genre->label }}</label>
              </div>
              @endforeach
            </div>
            <div class="form-group">
              <label for="edition_year">Inserisci l'anno di pubblicazione dell'edizione</label>
              <input type="number" class="form-control" id="edition_year" name="edition_year" value="{{old('edition_year', $book->edition_year)}}">
            </div>
            <div class="form-group">
              <label for="description">Inserisci una descrizione</label>
              <textarea  class="form-control" id="description" name="description"> 
                {{old('decription', $book->description)}}
              </textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection
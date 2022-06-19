@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{route('admin.books.store')}}" >
            @csrf
            <div class="form-group">
              <label for="title">Inserisci il Titolo</label>
              <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
              <label for="image">Inserisci l'URL dell'immagine</label>
              <input type="text" class="form-control" id="image" name="image">
            </div>
            <div class="form-group">
              <label for="edition_year">Inserisci l'anno di pubblicazione dell'edizione</label>
              <input type="number" class="form-control" id="edition_year" name="edition_year">
            </div>
            <div class="form-group">
              <label for="description">Inserisci una sdescrizione</label>
              <input type="textarea" class="form-control" id="description" name="description">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection